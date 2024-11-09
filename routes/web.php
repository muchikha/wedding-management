<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Include HomeController for the homepage
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BudgetItemController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\TestimonialController; // Include TestimonialController
use App\Http\Controllers\SeatingController; // Include SeatingController for seat reservations

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

// Routes for managing testimonials
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

// Routes for seat reservation
Route::get('seating/{weddingId}/reserve', [SeatingController::class, 'reserve'])->name('seating.reserve'); // Show reservation form
Route::post('/seating/{weddingId}/store', [SeatingController::class, 'store'])->name('seating.store'); // Store reservation
