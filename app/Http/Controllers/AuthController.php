<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        $credentials = request()->only(['username', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors(['error' => 'Invalid Credentials']);
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('show_login');
    }

    public function show_register() {
        return view('auth.register');
    }

    public function register() {
        $data = request()->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = \App\Models\User::create($data);
        auth()->login($user);
        return redirect()->route('home');
    }

    public function show_login() {
        return view('auth.login');
    }
}
