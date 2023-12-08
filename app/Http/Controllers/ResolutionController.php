<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resolution;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ResolutionController extends Controller
{
    public function index()
    {
        $resolutions = Resolution::all();
        return view('1st_admin.dashboard', compact('resolutions'));
    }

    public function create()
    {
        return view('1st_admin.actions.bodres_add');
    }

    public function updateForm($id)
    {
        // Fetch the resolution by ID
        $resolution = Resolution::find($id);

        // Check if the resolution exists
        if (!$resolution) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Pass the resolution data to the view
        return view('1st_admin.actions.bodres_add', compact('resolution'));
    }

    public function showForm()
    {
        return view('1st_admin.actions.bodres_add'); // Assuming you have a view named 'resolution.form'
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'res_number' => 'required|string',
            'res_date' => 'required|date',
            'agenda' => 'required|string',
            'tags' => 'required|string',
            'status' => 'required|string',
            'encoded_by_name' => 'required|string',
            'encoded_by_date' => 'required|date',
        ]);

        // Convert the date format to 'YYYY-MM-DD'
        $resDate = Carbon::createFromFormat('m/d/Y', $request->input('res_date'))->format('Y-m-d');

        // Create a new resolution instance
        Resolution::create([
            'res_number' => $request->input('res_number'),
            'res_date' => $resDate,
            'agenda' => $request->input('agenda'),
            'tags' => $request->input('tags'),
            'status' => $request->input('status'),
            'encoded_by_name' => $request->input('encoded_by_name'),
            'encoded_by_date' => $request->input('encoded_by_date'),
        ]);

        // Redirect back or to a success page
        return redirect()->route('dashboard')->with('success', ' Resolution added successfully')->withInput();
    }

    public function edit($id)
    {
        $resolution = Resolution::find($id);
        return view('1st_admin.actions.bodres_edit', compact('resolution'));
    }

    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'res_number' => 'required',
            'agenda' => 'required',
            'res_date' => 'required|date',
            'status' => 'required',
            'encoded_by_name' => 'required',
            'encoded_by_date' => 'required|date',
        ]);

        // Update data
        $resolution = Resolution::find($id);
        $resolution->update([
            'res_number' => $request->input('res_number'),
            'agenda' => $request->input('agenda'),
            'res_date' => $request->input('res_date'),
            'status' => $request->input('status'),
            'encoded_by_name' => $request->input('encoded_by_name'),
            'encoded_by_date' => $request->input('encoded_by_date'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Resolution updated successfully.')->withInput();
    }

    public function destroy($id)
    {
        // Find the record by its ID
        $resolution = Resolution::find($id);

        // Check if the record exists
        if ($resolution) {
            // Delete the record
            $resolution->delete();

            // Optionally, you can redirect with a success message
            return redirect()->route('dashboard')->with('success', 'Resolution deleted successfully!');
        } else {
            // If the record doesn't exist, you may want to handle this case (e.g., show an error message)
            return redirect()->route('dashboard')->with('error', 'Resolution not found!');
        }
    }
}
