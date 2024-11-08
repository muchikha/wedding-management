<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all upcoming weddings and testimonials
        $weddings = Wedding::all();
        $testimonials = Testimonial::all(); 
        
        return view('home', compact('weddings', 'testimonials'));
    }
}
