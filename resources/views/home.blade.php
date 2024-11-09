<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="text-center bg-cover bg-center py-20" style="background-image: url('path-to-your-image.jpg')">
    <h1 class="text-4xl font-bold text-white mb-4">Celebrate Love, Reserve Your Seat</h1>
    <p class="text-lg text-white mb-8">Your gateway to unforgettable weddings and celebrations.</p>
    <a href="{{ route('weddings.index') }}" class="btn-primary">View Weddings</a>
    <a href="{{ route('seating.reserve') }}" class="btn-secondary">Reserve a Seat</a>
</section>

<!-- Upcoming Weddings Section -->
<section class="container mx-auto py-10">
    <h2 class="text-3xl font-semibold text-center mb-8">Upcoming Weddings</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($weddings as $wedding)
        @dd($wedding)
            <div class="bg-white shadow-md p-6 rounded-lg">
                <h3 class="text-xl font-bold">{{ $wedding->name }}</h3>
                <p>{{ $wedding->date }} | {{ $wedding->venue }}</p>
                <a href="{{ route('seating.reserve', ['weddingId' => $wedding->id]) }}" class="text-blue-500 hover:text-blue-700">Reserve Seat</a>
            </div>
        @endforeach
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-gray-100 py-10">
    <h2 class="text-3xl font-semibold text-center mb-6">Why Choose Us?</h2>
    <div class="flex justify-center gap-8">
        <div class="text-center">
            <img src="icon-seat.svg" alt="Seat Icon" class="mx-auto mb-4">
            <p class="font-semibold">Easy Seat Reservation</p>
        </div>
        <div class="text-center">
            <img src="icon-planning.svg" alt="Planning Icon" class="mx-auto mb-4">
            <p class="font-semibold">Trusted Planning</p>
        </div>
        <div class="text-center">
            <img src="icon-updates.svg" alt="Updates Icon" class="mx-auto mb-4">
            <p class="font-semibold">Real-Time Updates</p>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="container mx-auto py-10">
    <h2 class="text-3xl font-semibold text-center mb-8">What Our Guests Say</h2>
    <div class="carousel testimonials">
        @foreach($testimonials as $testimonial)
            <div class="testimonial">
                <p class="text-lg">{{ $testimonial->message }}</p>
                <p class="text-gray-600 text-sm">{{ $testimonial->name }}</p>
            </div>
        @endforeach
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto flex justify-between">
        <div>
            <p class="font-bold">Contact Us</p>
            <p>123 Wedding Lane, Love City, State</p>
            <p>Email: contact@weddingmanager.com</p>
        </div>
        <div>
            <a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a>
            <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white ml-4">Contact</a>
        </div>
    </div>
</footer>

@endsection
