<?php

namespace App\Controllers;

class ManagerController extends BaseController
{
    public function dashboard(): string
    {
        return view('Manager/dashboard');
    }
    public function teamsListing()
    {
        $db = \Config\Database::connect();

        $user_id = session()->get('user')['id'];

        $teams = $db->table('teams t')
                    ->distinct()
                    ->select('t.*')
                    ->join('team_members tm', 'tm.team_id = t.id', 'left')
                    ->groupStart()
                        ->where('t.user_id', $user_id)
                        ->orWhere('tm.user_id', $user_id)
                    ->groupEnd()
                    ->get()
                    ->getResultArray();

        return view('manager/teams/list', [
            'teams' => $teams
        ]);
    }

    public function teamsView($team_id)
    {
        $db = \Config\Database::connect();

        $user = session()->get('user');
        $user_id = $user['id'];

        // 1️⃣ Check if this user is a manager in this team
        $hasAccess = $db->table('team_members tm')
                        ->join('users u', 'u.id = tm.user_id')
                        ->where('tm.team_id', $team_id)
                        ->where('tm.user_id', $user_id)
                        ->where('u.role', 'manager')
                        ->countAllResults();

        if (!$hasAccess) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // 2️⃣ Get Team Details
        $team = $db->table('teams')
                ->where('id', $team_id)
                ->get()
                ->getRowArray();

        if (!$team) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // 3️⃣ Get Employees in that team
        $employees = $db->table('team_members tm')
                        ->select('u.id, u.name, u.email, u.role, u.is_active, tm.joined_at')
                        ->join('users u', 'u.id = tm.user_id')
                        ->where('tm.team_id', $team_id)
                        ->where('u.role', 'employee')
                        ->get()
                        ->getResultArray();

        return view('Manager/teams/view', [
            'team'      => $team,
            'employees' => $employees
        ]);
    }
}
