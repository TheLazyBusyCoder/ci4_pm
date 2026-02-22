<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

/**
 * AuthController
 *
 * All DB work is done with $db->table() — no Models.
 * Views are intentionally left as stubs; wire them up when ready.
 */
class AuthController extends BaseController
{
    private \CodeIgniter\Database\BaseConnection $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        helper(['form', 'url']);
    }

    // ================================================================
    //  VIEWS (GET) — swap return stubs for real views when ready
    // ================================================================

    public function loginView(): string
    {
        if (session()->get('user')) {
            return redirect()->to($this->dashboardRoute());
        }
        return view('Auth/login');          // create this view when ready
    }

    public function forgotPasswordView(): string
    {
        return view('Auth/forgot_password'); // create this view when ready
    }

    public function resetPasswordView(string $token): string
    {
        $user = $this->db->table('users')
                         ->where('reset_token', $token)
                         ->where('reset_token_expires_at >', date('Y-m-d H:i:s'))
                         ->get()
                         ->getRowArray();

        if (! $user) {
            return redirect()->to('/auth/forgot-password')
                             ->with('error', 'This reset link is invalid or has expired.');
        }

        return view('Auth/reset_password', ['token' => $token]); // create this view when ready
    }

    // ================================================================
    //  POST: LOGIN
    // ================================================================

    public function login(): RedirectResponse
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $this->validator->getErrors());
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->db->table('users')
                         ->where('email', $email)
                         ->get()
                         ->getRowArray();

        if (! $user || ! password_verify($password, $user['password'])) {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Invalid email or password.');
        }

        if (! $user['is_active']) {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'Your account has been deactivated. Contact the administrator.');
        }

        // Store in session (never store the password hash)
        session()->set('user', $this->safeUser($user));
        session()->regenerate();

        // Optional remember-me cookie (30 days)
        if ($this->request->getPost('remember_me')) {
            $token = bin2hex(random_bytes(32));

            $this->db->table('users')
                     ->where('id', $user['id'])
                     ->update(['remember_token' => $token]);

            set_cookie('remember_token', $token, 60 * 60 * 24 * 30);
        }

        return redirect()->to($this->dashboardRoute($user['role']))
                         ->with('success', 'Welcome back, ' . $user['name'] . '!');
    }

    // ================================================================
    //  POST: REGISTER
    //  Self-registration creates employees only.
    //  Managers are created by the admin through the admin panel.
    // ================================================================

    public function register(): RedirectResponse
    {
        $rules = [
            'name'             => 'required|min_length[2]|max_length[255]',
            'email'            => 'required|valid_email|max_length[255]',
            'password'         => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
        ];

        $messages = [
            'confirm_password' => ['matches' => 'Passwords do not match.'],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');

        // Manual unique-email check
        $exists = $this->db->table('users')
                           ->where('email', $email)
                           ->countAllResults();

        if ($exists > 0) {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'This email address is already registered.');
        }

        $this->db->table('users')->insert([
            'name'       => $this->request->getPost('name'),
            'email'      => $email,
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role'       => 'employee',
            'is_active'  => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/auth/login')
                         ->with('success', 'Account created! Please log in.');
    }

    // ================================================================
    //  POST: LOGOUT
    // ================================================================

    public function logout(): RedirectResponse
    {
        session()->destroy();

        return redirect()->to('/auth/login')
                         ->with('success', 'You have been logged out.');
    }

    // ================================================================
    //  GET: ME — returns current authenticated user
    // ================================================================

    public function me()
    {
        $sessionUser = session()->get('user');

        // Always fetch fresh data from DB
        $user = $this->db->table('users')
                         ->where('id', $sessionUser['id'])
                         ->get()
                         ->getRowArray();

        if (! $user) {
            session()->destroy();
            return redirect()->to('/auth/login');
        }

        $safe = $this->safeUser($user);

        // JSON response for AJAX / API calls
        if ($this->request->isAJAX()) {
            return $this->response->setJSON(['status' => true, 'user' => $safe]);
        }

        return view('Auth/me', ['user' => $safe]); // create this view when ready
    }

    // ================================================================
    //  POST: REFRESH TOKEN — regenerates session ID
    // ================================================================

    public function refreshToken()
    {
        $sessionUser = session()->get('user');

        // Re-fetch from DB to get the latest data
        $user = $this->db->table('users')
                         ->where('id', $sessionUser['id'])
                         ->get()
                         ->getRowArray();

        if (! $user) {
            return $this->response
                        ->setStatusCode(401)
                        ->setJSON(['status' => false, 'message' => 'User not found.']);
        }

        $safe = $this->safeUser($user);
        session()->set('user', $safe);
        session()->regenerate(true);

        return $this->response->setJSON([
            'status'  => true,
            'message' => 'Session refreshed.',
            'user'    => $safe,
        ]);
    }

    // ================================================================
    //  POST: FORGOT PASSWORD
    // ================================================================

    public function forgotPassword(): RedirectResponse
    {
        if (! $this->validate(['email' => 'required|valid_email'])) {
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $this->validator->getErrors());
        }

        // Always show the same message to prevent email enumeration
        $msg = 'If that email is registered you will receive a reset link shortly.';

        $email = $this->request->getPost('email');

        $user = $this->db->table('users')
                         ->where('email', $email)
                         ->get()
                         ->getRowArray();

        if (! $user) {
            return redirect()->back()->with('success', $msg);
        }

        $token     = bin2hex(random_bytes(32));
        $expiresAt = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $this->db->table('users')
                 ->where('id', $user['id'])
                 ->update([
                     'reset_token'            => $token,
                     'reset_token_expires_at' => $expiresAt,
                     'updated_at'             => date('Y-m-d H:i:s'),
                 ]);

        $this->sendResetEmail($user, $token);

        return redirect()->back()->with('success', $msg);
    }

    // ================================================================
    //  POST: RESET PASSWORD
    // ================================================================

    public function resetPassword(): RedirectResponse
    {
        $rules = [
            'token'            => 'required',
            'password'         => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $this->validator->getErrors());
        }

        $token = $this->request->getPost('token');

        $user = $this->db->table('users')
                         ->where('reset_token', $token)
                         ->where('reset_token_expires_at >', date('Y-m-d H:i:s'))
                         ->get()
                         ->getRowArray();

        if (! $user) {
            return redirect()->to('/auth/forgot-password')
                             ->with('error', 'This reset link is invalid or has expired. Please request a new one.');
        }

        $this->db->table('users')
                 ->where('id', $user['id'])
                 ->update([
                     'password'               => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                     'reset_token'            => null,
                     'reset_token_expires_at' => null,
                     'updated_at'             => date('Y-m-d H:i:s'),
                 ]);

        return redirect()->to('/auth/login')
                         ->with('success', 'Password reset successfully. Please log in.');
    }

    // ================================================================
    //  PRIVATE HELPERS
    // ================================================================

    /**
     * Strip sensitive fields before storing user in session or returning to client.
     */
    private function safeUser(array $user): array
    {
        unset(
            $user['password'],
            $user['remember_token'],
            $user['reset_token'],
            $user['reset_token_expires_at']
        );
        return $user;
    }

    /**
     * Return dashboard URL based on role.
     */
    private function dashboardRoute(string $role = 'employee'): string
    {
        return match ($role) {
            'admin'   => '/admin/dashboard',
            'manager' => '/manager/dashboard',
            default   => '/employee/dashboard',
        };
    }

    /**
     * Send password reset email using CI4's Email service.
     */
    private function sendResetEmail(array $user, string $token): void
    {
        $email     = \Config\Services::email();
        $resetLink = base_url('/auth/reset-password/' . $token);

        $email->setTo($user['email']);
        $email->setSubject('Reset your password');
        $email->setMessage("
            <p>Hi {$user['name']},</p>
            <p>Click the link below to reset your password. This link expires in 1 hour.</p>
            <p><a href='{$resetLink}'>{$resetLink}</a></p>
            <p>If you did not request this, ignore this email.</p>
        ");
        $email->setMailType('html');
        $email->send();
    }
}