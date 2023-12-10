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

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->admin == 1) {
                return redirect()->route('1st_admin.BOD (view only).BOD_dashboard');
            } else {
                return redirect()->route('1st_admin.dashboard');
            }
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }
}
