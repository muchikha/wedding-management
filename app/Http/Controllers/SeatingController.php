<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class SeatingController extends Controller
{
    // Display the seat reservation form for a specific wedding
    public function reserve($weddingId)
    {
        // Find the wedding by ID
        $wedding = Wedding::findOrFail($weddingId); // Ensure the wedding exists

        // Return the view with the wedding data
        return view('seating.reserve', compact('wedding')); 
    }

    // Store the seat reservation
    public function store(Request $request, $weddingId)
    {
        // Validate input for the reservation
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Add reservation storing logic here, for example:
        // Reservation::create([
        //     'wedding_id' => $weddingId,
        //     'name' => $request->name,
        //     'message' => $request->message,
        // ]);

        // Redirect to homepage or other view with a success message
        return redirect()->route('home')->with('success', 'Your seat has been reserved!');
    }
}
