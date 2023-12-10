<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;

class BODController extends Controller
{
    public function showForm()
    {
        return view('1st_admin.actions.bod_add');
    }

    public function addBOD(Request $request)
    {  
        // Validation rules
        $rules = [
            'name' => 'required|string',
            'position' => 'required|string',
            'period' => 'required|string',
            'file' => 'required|file|mimes:jpeg,png,pdf,doc,docx|max:3048',
            'status' => 'required|string|in:Open,Closed',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'admin' => 'required|in:1,0',
        ];

        // Validate the form data
        $request->validate($rules);

        try {
            // Process the form data and save to the database
            $user = new User();
            $user->name = $request->input('name');
            $user->Position = $request->input('position');
            $user->Period = $request->input('period');
            $user->Status = $request->input('status');
            $user->username = $request->input('username');
            $user->password = bcrypt($request->input('password'));
            $user->admin = $request->input('admin'); // Save the admin level

            // Handle file upload
            $imagePath = $request->file('file')->store('users', 'public');
            Log::info('Image Path: ' . $imagePath);
            // Save the image path to the database
            $user->image = $imagePath;

            // Save the user to the database
            $user->save();
            dd('Checkpoint 1');
            // Redirect with success message
            return redirect()->route('bod-dashboard')->with('success', 'BOD added successfully!');

        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error($e);

            // Redirect back with error message
            return back()->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }
}