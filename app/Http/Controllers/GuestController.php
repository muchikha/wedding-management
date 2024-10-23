<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Event; // Include Event model to interact with events table
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class GuestController extends Controller
{
    // Function to display all guests
    public function index() {
        // Retrieve all guests from the database
        $guests = Guest::all();
        return view('guests.index', compact('guests')); // Pass guests data to a view called 'index'
    }

    // Function to create a new guest
    public function create($eventId) { // Accept event ID as a parameter
        // Retrieve the specific event using the passed event ID
        $event = Event::findOrFail($eventId); // Use findOrFail to return a 404 if not found

        // Pass the event to the view
        return view('guests.create', compact('event'));
    }

    // Function to store guest information
    public function store(Request $request) {
        // Debugging: Log the request data
        Log::info($request->all());

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'RSVP_status' => 'required|in:yes,no,maybe', // Ensure the status is one of the allowed values
            'event_id' => 'required|exists:events,id', // Validate that event_id exists in events table
        ]);

        // Store the guest in the database
        Guest::create($request->all());

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Guest added successfully!');
    }
}
