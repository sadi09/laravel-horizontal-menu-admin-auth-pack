<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function demoDashboard()
    {
        return view('pages.demo-dashboard');
    }

    public function index()
    {
        return view('pages.admin.dashboard');
    }
}
