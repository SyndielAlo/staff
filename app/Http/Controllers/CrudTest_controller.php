<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudTest_controller extends Controller
{
    public function bodres_add(){
        return view('1st_admin.actions.bodres_add');
    }
    public function bodres_edit(){
        return view('1st_admin.actions.bodres_edit');
    }

    public function bodcom_add(){
        return view('1st_admin.actions.bodcom_add');
    }
    public function bodcom_edit(){
        return view('1st_admin.actions.bodcom_edit');
    }

    public function bod_add(){
        return view('1st_admin.actions.bod_add');
    }
    public function bod_edit(){
        return view('1st_admin.actions.bod_edit');
    }

    public function dh_add(){
        return view('1st_admin.actions.dh_add');
    }
    public function dh_edit(){
        return view('1st_admin.actions.dh_edit');
    }

    public function update_profile(){
        return view('1st_admin.actions.update-profile');
    }
}
