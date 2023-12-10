<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Add_BODController extends Controller
{
    public function showForm()
    {
        return view('1st_admin.actions.bod_addesolution');
    }

    public function addResolution(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'period' => 'required|string',
            'file' => 'required|file',
            'status' => 'required|string|in:Open,Closed',
        ]);

        // Process the form data and save to the database
        $user = new User();
        $user->name = $request->input('name');
        $user->position = $request->input('position');
        // Add other fields as needed

        // Save the user to the database
        $user->save();

        // You can also process and save the file here if needed

        // Redirect or return a response as needed
        return redirect()->route('form.show')->with('success', 'BOD Resolution added successfully!');
    }
}
