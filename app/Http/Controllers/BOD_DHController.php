<?php

namespace App\Http\Controllers;
use App\Models\Committee;
use Illuminate\Http\Request;

class BOD_DHController extends Controller
{
    public function index()
    {
        $dh = Committee::all();
        return view('1st_admin.BOD (view only).BOD_DH', compact('dh'));
    }
}
