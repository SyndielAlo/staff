<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.BOD_login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('welcome');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->admin == 1) {
                return redirect()->route('bod-dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }
}
