<?php

namespace App\Http\Controllers;

use App\Models\Vendor; // Ensure the Vendor model is imported
use Illuminate\Http\Request;

class VendorController extends Controller
{
    // Display a listing of vendors
    public function index()
    {
        // Fetch all vendors from the database
        $vendors = Vendor::all();

        // Return the index view with vendors data
        return view('vendors.index', compact('vendors'));
    }

    // Show the form for creating a new vendor
    public function create()
    {
        // Return the create view for vendors
        return view('vendors.create');
    }

    // Store a newly created vendor in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Create a new vendor using the request data
        Vendor::create($request->except('_token'));

        // Redirect to the index page with a success message
        return redirect()->route('vendors.index')->with('success', 'Vendor created successfully.');
    }

    // Show the form for editing the specified vendor
    public function edit(Vendor $vendor)
    {
        // Return the edit view with the specified vendor
        return view('vendors.edit', compact('vendor'));
    }

    // Update the specified vendor in the database
    public function update(Request $request, Vendor $vendor)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Update the vendor with the request data
        $vendor->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('vendors.index')->with('success', 'Vendor updated successfully.');
    }

    // Remove the specified vendor from the database
    public function destroy(Vendor $vendor)
    {
        // Delete the vendor
        $vendor->delete();

        // Redirect to the index page with a success message
        return redirect()->route('vendors.index')->with('success', 'Vendor deleted successfully.');
    }
}
