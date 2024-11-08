<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VendorController; // Include the VendorController
use App\Http\Controllers\BudgetItemController;
use App\Http\Controllers\WeddingController;

// Route to show the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Routes for managing guests
Route::get('/guests/create/{eventId}', [GuestController::class, 'create']);
Route::post('/guests', [GuestController::class, 'store']);

// Resource route for managing vendors
Route::resource('vendors', VendorController::class);

//Resource route for managing budget
Route::resource('budget-items', BudgetItemController::class);


//Resource route for managing wedding
Route::resource('weddings', WeddingController::class);
