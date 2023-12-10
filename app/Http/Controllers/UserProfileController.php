<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function index()
    {
        // Display user profile information (optional)
        $users = User::all();
        return view('1st_admin.actions.update-profile'); // Replace 'index' with your actual index view
    }

    public function create()
    {
        return view('user_profile.create');
    }

    public function store(Request $request)
    {
        // Validation rules for the form fields
        $rules = [
            'inputName' => 'required|string',
            'inputEmail' => 'required|email',
            'inputName2' => 'required|string',
            // Add more validation rules as needed
        ];

        // Validate the request
        $request->validate($rules);

        // Save/update user profile information
        // ...

        return redirect()->route('1st_admin.actions.update-profile')->with('success', 'Profile updated successfully.');
    }

    public function edit($id)
    {
        $userProfile = User::find($id);
    
        // Check if the user profile exists
        if (!$userProfile) {
            return redirect()->back()->with('error', 'User profile not found');
        }
    
        return view('1st_admin.actions.update-profile', compact('userProfile'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules for the form fields
        $rules = [
            'inputName' => 'required|string',
            'inputEmail' => 'required|email',
            'inputName2' => 'required|string',
            // Add more validation rules as needed
        ];

        // Validate the request
        $request->validate($rules);

        // Save/update user profile information
        // ...

        return redirect()->route('user-profile.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy($id)
    {
        // Delete user profile information by $id
        // ...

        return redirect()->route('user-profile.index')->with('success', 'Profile deleted successfully.');
    }
}
