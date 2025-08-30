<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // TAMPIL FORM REGISTER
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // REGISTER
    public function register(Request $request)
    {
        $role = User::count();
        $roleData = $role <= 0 ? 'admin' : 'user';

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $roleData,
        ]);

        return redirect()->route('login')->with('success', 'Register berhasil, silakan login.');
    }

    // TAMPIL FORM LOGIN
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // LOGOUT
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}