<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginTest_controller extends Controller
{
    public function bodLogin(){
        return view('auth.BOD_login');
    }
    public function dhLogin(){
        return view('auth.DH_login');
    }
}
