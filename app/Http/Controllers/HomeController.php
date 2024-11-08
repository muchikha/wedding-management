<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use App\Models\Testimonial; // Include the Testimonial model

class HomeController extends Controller
{
    // Display the homepage with upcoming weddings and testimonials
    public function index()
    {
        // Fetch upcoming weddings and testimonials
        $weddings = Wedding::latest()->take(5)->get(); // Fetch latest 5 weddings
        $testimonials = Testimonial::all(); // Fetch all testimonials

        // Return the homepage view with the data
        return view('home', compact('weddings', 'testimonials'));
    }
}
