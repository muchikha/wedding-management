<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController; // Make sure to include the GuestController

// Route to show the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route to create a new guest for a specific event
Route::get('/guests/create/{eventId}', [GuestController::class, 'create']);

// Route to store a new guest in the database
Route::post('/guests', [GuestController::class, 'store']);
