<?php

namespace App\Http\Controllers;
use App\Models\Resolution;
use Illuminate\Http\Request;

class BOD_ResolutionController extends Controller
{
    public function index()
    {
        $resolutions = Resolution::all();
        return view('1st_admin.BOD (view only).BOD_resolution', compact('resolutions'));
    }
}
