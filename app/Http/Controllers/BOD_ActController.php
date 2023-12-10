<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BODController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('1st_admin.bod_dashboard', compact('users'));
    }

    public function create()
    {
        return view('1st_admin.actions.bod_add');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'period' => 'required|string',
            'status' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
            'admin' => 'required|boolean',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new user instance
        $user = new User();
        $user->name = $request->input('name');
        $user->position = $request->input('position');
        $user->period = $request->input('period');
        $user->status = $request->input('status');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->admin = $request->input('admin'); // Save the admin level

        // Handle file upload
        $imagePath = $request->file('file')->store('users', 'public');
        Log::info('Image Path: ' . $imagePath);

        // Save the image path to the database
        $user->image = $imagePath;

        // Save the user data to the database
        $user->save();

        // Redirect back or to a success page
        return redirect()->route('bod_dashboard')->with('success', 'Board member added successfully')->withInput();
    }

    public function edit($id)
{
    $user = User::find($id);
    return view('1st_admin.actions.bod_edit', compact('user'));
}

public function update(Request $request, $id)
{
    // Validation
    $request->validate([
        'name' => 'required|string',
        'position' => 'required|string',
        'period' => 'required|string',
        'status' => 'required|string',
        'username' => 'required|string',
        'password' => 'nullable|string',
        'admin' => 'required|boolean',
        'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update data
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->position = $request->input('position');
    $user->period = $request->input('period');
    $user->status = $request->input('status');
    $user->username = $request->input('username');
    
    // Update password if provided
    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    // Update admin level
    $user->admin = $request->input('admin');

    // Handle file upload if a new file is provided
    if ($request->hasFile('file')) {
        // Delete the old file
        Storage::disk('public')->delete($user->image);

        // Handle the new file upload
        $imagePath = $request->file('file')->store('users', 'public');
        Log::info('Image Path: ' . $imagePath);

        // Save the new image path to the database
        $user->image = $imagePath;
    }

    // Save the updated user data to the database
    $user->save();

    return redirect()->route('bod_dashboard')->with('success', 'Board member updated successfully.')->withInput();
}

public function destroy($id)
{
    // Find the record by its ID
    $user = User::find($id);

    // Check if the record exists
    if ($user) {
        // Delete the record
        $user->delete();

        // Optionally, you can redirect with a success message
        return redirect()->route('bod_dashboard')->with('success', 'Board member deleted successfully!');
    } else {
        // If the record doesn't exist, you may want to handle this case (e.g., show an error message)
        return redirect()->route('bod_dashboard')->with('error', 'Board member not found!');
    }
}
}