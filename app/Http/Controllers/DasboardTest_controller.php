<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardTest_controller extends Controller
{
    public function dashboard(){
        return view('1st_admin.dashboard');
    }

    public function bod_dashboard(){
        return view('1st_admin.bod_dashboard');
    }

    public function bod_com_dashboard(){
        return view('1st_admin.bod_com_dashboard');
    }

    public function dh_dashboard(){
        return view('1st_admin.dh_dashboard');
    }

    public function dh_logs(){
        return view('1st_admin.dh_logs');
    }

    public function bod_dashboard_main(){
        return view('1st_admin.BOD (view only).BOD_dashboard');
    }
    public function bod_committee_dashboard(){
        return view('1st_admin.BOD (view only).BOD_committee');
    }
    public function bod_resolution_dashboard(){
        return view('1st_admin.BOD (view only).BOD_resolution');
    }
    public function department_head_dashboard(){
        return view('1st_admin.BOD (view only).BOD_DH');
    }
}
