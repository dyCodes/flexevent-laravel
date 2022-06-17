<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index');
    }
    // Override fortify default logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
