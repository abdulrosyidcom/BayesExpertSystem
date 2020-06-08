<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('users.dashboard.index');
    }
}
