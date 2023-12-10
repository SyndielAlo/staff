<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DepartmentHeadController extends Controller
{
    public function index()
    {   $users = User::where('level_group', 'DH')->get();
        $totalDH = User::where('level_group', 'DH')->sum('level_group');
        return view('1st_admin.dh_dashboard', compact('users','totalDH'));
    }

    public function create()
    {
        return view('1st_admin.actions.dh_add');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string',
            'username' => 'required|string',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string',
            'confirm' => 'nullable|string|same:password',
            'rights' => 'required|string',
            'module' => 'required|array',
        ];

        // Validate the request
        $request->validate($rules);

        // Create or update user
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->level_group = 'DH';
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->rights = $request->input('rights');
        $user->modules = $request->input('module');

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('users', 'public');
            $user->image = $path;
        }

        $user->save();

        return redirect()->route('1st_admin.dh_dashboard')->with('success', 'User added successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string',
            'username' => 'required|string',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string',
            'confirm' => 'nullable|string|same:password',
            'rights' => 'required|string',
            'module' => 'required|array',
        ];

        // Validate the request
        $request->validate($rules);

        // Find the user
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('1st_admin.actions.dh_edit')->with('error', 'User not found');
        }

        // Update user data
        $user->name = $request->input('name');
        $user->username = $request->input('username');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->rights = $request->input('rights');
        $user->modules = $request->input('module');

        // Handle file upload
        if ($request->hasFile('file')) {
            // Delete the old file
            // Storage::delete($user->image); // Uncomment this line if you want to delete the old image

            // Handle the new file upload
            $file = $request->file('file');
            $path = $file->store('users', 'public');
            $user->image = $path;
        }

        $user->save();

        return redirect()->route('1st_admin.dh_dashboard')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            // Storage::delete($user->image); // Uncomment this line if you want to delete the user image

            $user->delete();

            return redirect()->route('1st_admin.dh_dashboard')->with('success', 'User deleted successfully');
        }

        return redirect()->route('1st_admin.dh_dashboard')->with('error', 'User not found');
    }
}