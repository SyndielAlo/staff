<?php

namespace App\Http\Controllers;
use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function index()
    {
        $committees = Committee::all();
        return view('1st_admin.BOD (view only).BOD_committee', compact('committees'));
    }
}
