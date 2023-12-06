<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resolution;
use Illuminate\Support\Str;

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
    public function showForm()
    {
        return view('1st_admin.actions.bodres_add'); // Assuming you have a view named 'resolution.form'
    }

    public function store(Request $request)
{
    // Validation
    $request->validate([
        'agenda' => 'required',
        'res_date' => 'required|date',
        'status' => 'required',
        'encoded_by' => 'required',
    ]);

    if ($request->fails()) {
        return redirect()->route('1st_admin.actions.bodres_add')
            ->withErrors($request)
            ->withInput();
    }

    try {
        // Generate unique identifiers
        $id = Str::uuid(); // Generates a UUID (Universally Unique Identifier)
        $res_number = Str::random(10); // Generates a random string of length 10

        // Store data
        Resolution::create([
            'id' => $id,
            'res_number' => $res_number,
            'agenda' => $request->input('agenda'),
            'res_date' => $request->input('res_date'),
            'status' => $request->input('status'),
            'encoded_by' => $request->input('encoded_by'),
        ]);

        return redirect()->route('1st_admin.actions.bodres_add')->with('success', 'Resolution created successfully.');
    } catch (\Exception $e) {
        // Handle the error
        return redirect()->route('1st_admin.actions.bodres_add')->with('error', 'Error creating resolution: ' . $e->getMessage());
    }
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
            'encoded_by' => 'required',
        ]);

        // Update data
        $resolution = Resolution::find($id);
        $resolution->update([
            'res_number' => $request->input('res_number'),
            'agenda' => $request->input('agenda'),
            'res_date' => $request->input('res_date'),
            'status' => $request->input('status'),
            'encoded_by' => $request->input('encoded_by'),
        ]);

        return redirect()->route('1s_admin/dashboard')->with('success', 'Resolution updated successfully.');
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


    
    public function addResolution(Request $request)
    {
        // Validate the form data
        $request->validate([
            'res_number' => 'required|string',
            'res_date' => 'required|date',
            'agenda' => 'required|string',
            'tags' => 'nullable|string',
            'status' => 'required|string|in:Confirmed,Amended',
            'encoded_by' => 'required|string',
            'encodedByDate' => 'required|date',
        ]);

         // Generate a unique res_number
         $latestResolution = Resolution::orderBy('id', 'desc')->first();
         $latestNumber = $latestResolution ? $latestResolution->res_number : 0;
         $newNumber = $latestNumber + 1;
 
         // Create a new Resolution instance
        $resolution = new Resolution();
        $resolution->res_number = $newNumber;
        $resolution->res_number = $request->input('res_number');
        $resolution->res_date = $request->input('res_date');
        $resolution->agenda = $request->input('agenda');
        $resolution->tags = $request->input('tags');
        $resolution->status = $request->input('status');
        $resolution->encoded_by_name = $request->input('encoded_by');
        $resolution->encoded_by_date = $request->input('encodedByDate');

        // Save the Resolution to the database
        $resolution->save();

        // Redirect to a success page or back to the form with a success message
        return redirect()->route('1s_admin/dashboard')->with('success', 'Resolution added successfully!');
    }
}
