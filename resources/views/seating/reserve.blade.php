<!-- resources/views/seating/reserve.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-bold mb-4">Reserve a Seat for {{ $wedding->name }}</h1>

        <form method="POST" action="{{ route('seating.store', $wedding->id) }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg">Your Name</label>
                <input type="text" name="name" id="name" class="border p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-lg">Message (optional)</label>
                <textarea name="message" id="message" class="border p-2 w-full"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Submit Reservation</button>
        </form>
    </div>
@endsection
