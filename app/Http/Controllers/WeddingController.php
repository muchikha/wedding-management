<?php

namespace App\Http\Controllers;

use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    /**
     * Display a listing of weddings.
     */
    public function index()
    {
        $weddings = Wedding::all();
        return view('home', compact('weddings'));
    }

    /**
     * Show the form for creating a new wedding.
     */
    public function create()
    {
        return view('weddings.create');
    }

    /**
     * Store a newly created wedding in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'venue' => 'required|string|max:255',
            'available_seats' => 'required|integer|min:1'
        ]);

        Wedding::create($request->all());

        return redirect()->route('weddings.index')->with('success', 'Wedding created successfully.');
    }

    /**
     * Display the specified wedding.
     */
    public function show(Wedding $wedding)
{
    if (!$wedding->id) {
        abort(404, 'Wedding not found');
    }
    return redirect()->route('seating.reserve', ['weddingId' => $wedding->id]);
}

    /**
     * Show the form for editing the specified wedding.
     */
    public function edit(Wedding $wedding)
    {
        return view('weddings.edit', compact('wedding'));
    }

    /**
     * Update the specified wedding in storage.
     */
    public function update(Request $request, Wedding $wedding)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'venue' => 'required|string|max:255',
            'available_seats' => 'required|integer|min:1'
        ]);

        $wedding->update($request->all());

        return redirect()->route('weddings.index')->with('success', 'Wedding updated successfully.');
    }

    /**
     * Remove the specified wedding from storage.
     */
    public function destroy(Wedding $wedding)
    {
        $wedding->delete();

        return redirect()->route('weddings.index')->with('success', 'Wedding deleted successfully.');
    }
}
