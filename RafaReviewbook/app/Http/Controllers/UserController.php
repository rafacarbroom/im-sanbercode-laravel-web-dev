<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // eager load profile to avoid N+1 problem
        $users = User::with('profile')->get();

        return view('user.index', compact('users'));
    }
}