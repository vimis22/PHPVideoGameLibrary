<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showAccount()
    {
        // Your account-related logic goes here
        return view('accounts/account');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/account')->with('status', 'Logged in');
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/account')->with('status', 'Logged out');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();


        // Check if the provided current password matches the user's actual password
        if (Hash::check($request->input('current_password'), $user->password)) {
            // Update the user's password
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return redirect('/account')->with('success', 'Password changed successfully');
        }

        return redirect('/account')->withErrors(['current_password' => 'Incorrect current password']);

    }

}
