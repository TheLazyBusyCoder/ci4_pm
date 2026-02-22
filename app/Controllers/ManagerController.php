<?php

namespace App\Controllers;

class ManagerController extends BaseController
{
    public function dashboard(): string
    {
        return view('Manager/dashboard');
    }
}
