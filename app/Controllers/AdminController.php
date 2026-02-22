<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard(): string
    {
        return view('Admin/dashboard');
    }
    public function createUserForm() {
        return view('Admin/users/create');
    }
    public function createUserStore()
    {
        helper(['form']);

        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|max_length[255]',
            'password' => 'required|min_length[8]',
            'role' => 'required|in_list[admin,manager,employee]'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', $validation->getErrors());
        }

        $db = \Config\Database::connect();

        // Check if email already exists
        $existingUser = $db->table('users')
            ->where('email', $this->request->getPost('email'))
            ->get()
            ->getRow();

        if ($existingUser) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Email already exists.');
        }

        // Insert user
        $db->table('users')->insert([
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => $this->request->getPost('role'),
            'is_active'  => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->back()
            ->with('success', 'User created successfully.');
    }

    public function usersListing()
    {
        $db = \Config\Database::connect();

        $query = $db->query("
            SELECT id, name, email, role, is_active, created_at, updated_at
            FROM users
            WHERE role != ?
        ", ['admin']);

        return view('Admin/users/list', [
            'users' => $query->getResultArray()
        ]);
    }

    public function teamsListing() {
        return "team listing";
    }

    public function createTeamForm() {
        return view("Admin/teams/create");
    }
}
