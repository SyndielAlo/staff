<?php


namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class BOD_MainController extends Controller
{
    public function index()
    {
        $main = Committee::all();
        $totalCommittee = Committee::sum('id');
        return view('1st_admin.BOD (view only).BOD_dashboard', compact('main','totalCommittee'));
    }
}
