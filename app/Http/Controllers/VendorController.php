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

    // Other methods (create, store, edit, update, destroy) go here
}
