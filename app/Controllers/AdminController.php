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
        $db = \Config\Database::connect();

        $query = $db->query("
            SELECT *
            FROM teams
        ");

        return view('Admin/teams/list', [
            'teams' => $query->getResultArray()
        ]);
    }

    public function createTeamForm() {
        return view("Admin/teams/create");
    }
    public function createTeamStore()
    {
        helper(['form']);

        $validation = \Config\Services::validation();

        $rules = [
            'name'        => 'required|min_length[3]|max_length[255]',
            'description' => 'permit_empty|max_length[1000]'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', $validation->getErrors());
        }

        $db = \Config\Database::connect();

        // Check if team name already exists
        $existingTeam = $db->table('teams')
            ->where('name', $this->request->getPost('name'))
            ->get()
            ->getRow();

        if ($existingTeam) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Team name already exists.');
        }

        // Insert team
        $db->table('teams')->insert([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'user_id'     => session()->get('user')['id'] ?? null, // creator
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->back()
            ->with('success', 'Team created successfully.');
    }

    public function teamMembers($team_id)
    {
        $db = \Config\Database::connect();

        // 1️⃣ Get team info (optional but recommended)
        $team = $db->table('teams')
                ->where('id', $team_id)
                ->get()
                ->getRowArray();

        if (!$team) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // 2️⃣ Get team members (join users + team_members)
        $members = $db->table('team_members tm')
                    ->select('u.id, u.name, u.email, u.role, u.is_active, tm.joined_at')
                    ->join('users u', 'u.id = tm.user_id')
                    ->where('tm.team_id', $team_id)
                    ->get()
                    ->getResultArray();

        $nonMembers = $db->table('users u')
                     ->select('u.id, u.name, u.email, u.role, u.is_active')
                     ->where("u.id NOT IN (
                         SELECT user_id 
                         FROM team_members 
                         WHERE team_id = " . (int)$team_id . "
                     )")
                     ->where('u.id !=' , session()->get('user')['id'])
                     ->get()
                     ->getResultArray();

        return view('admin/teams/teamMembers', [
            'team'    => $team,
            'members' => $members,
            "nonMembers" => $nonMembers
        ]);
    }

    public function teamMembersAdd($team_id)
    {
        $db = \Config\Database::connect();

        $user_id = (int) $this->request->getPost('user_id');

        if (!$user_id) {
            return redirect()->back()->with('error', 'Invalid user selected.');
        }

        // 1️⃣ Check if team exists
        $teamExists = $db->table('teams')
                        ->where('id', $team_id)
                        ->countAllResults();

        if (!$teamExists) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // 2️⃣ Prevent duplicate insert
        $alreadyMember = $db->table('team_members')
                            ->where('team_id', $team_id)
                            ->where('user_id', $user_id)
                            ->countAllResults();

        if ($alreadyMember) {
            return redirect()->back()->with('error', 'User already in this team.');
        }

        // 3️⃣ Insert new team member
        $db->table('team_members')->insert([
            'team_id'   => $team_id,
            'user_id'   => $user_id,
            'joined_at' => date('Y-m-d')
        ]);

        return redirect()
                ->to('/admin/teams/members/' . $team_id)
                ->with('success', 'Member added successfully.');
    }
}
