<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup()
    {
        return view('sign-up');
    }

    public function store()
    {
        request()->validate(
            [
                'first_name' => 'required|min:3|max:50',
                'last_name' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
                // 'country' => 'required',
                'phone_number' => 'required|numeric',
            ]
        );

        $user = User::create(
            [
                'first_name' => request()->get('first_name'),
                'last_name' => request()->get('last_name'),
                'email' => request()->get('email'),
                'password' => Hash::make(request()->get('password')),
                'country' => 'Cambodia',
                'phone_number' => request()->get('phone_number'),
                'is_admin' => 0,
            ]
        );

        return redirect()->route('user.dashboard')->with('success', 'Account created successfully');
    }

    public function login()
    {
        return view('log-in');
    }

    public function authenticate()
    {
        request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]
        );

        $credentials = request()->only('email', 'password');

        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->route('user.dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully!');
    }

    public function dashboard()
    {
        return view('user.user_dashboard');
    }

    public function profile()
    {
        return view('user.user_profile');
    }

    public function edit()
    {
        return view('user.user_profile_edit');
    }
}
