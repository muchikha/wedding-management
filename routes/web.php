<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Include HomeController for the homepage
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BudgetItemController;
use App\Http\Controllers\WeddingController;

// Route to show the homepage with upcoming weddings and reservation option
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes for managing guests
Route::get('/guests/create/{eventId}', [GuestController::class, 'create']);
Route::post('/guests', [GuestController::class, 'store']);

// Resource route for managing vendors
Route::resource('vendors', VendorController::class);

// Resource route for managing budget items
Route::resource('budget-items', BudgetItemController::class);

// Resource route for managing weddings
Route::resource('weddings', WeddingController::class);
