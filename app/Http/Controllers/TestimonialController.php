<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Show the form to create a new testimonial
    public function create()
    {
        return view('testimonials.create');
    }

    // Store a new testimonial
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new testimonial using mass assignment
        Testimonial::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        // Redirect back to the form with a success message
        return redirect()->route('testimonials.create')->with('success', 'Your testimonial has been submitted!');
    }
}
