@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">{{ $wedding->name }}</h1>

        <div class="bg-white p-6 rounded shadow">
            <p><strong>Date:</strong> {{ $wedding->date }}</p>
            <p><strong>Time:</strong> {{ $wedding->time }}</p>
            <p><strong>Venue:</strong> {{ $wedding->venue }}</p>
            <p><strong>Available Seats:</strong> {{ $wedding->available_seats }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('weddings.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
            <a href="{{ route('weddings.edit', $wedding->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Edit Wedding</a>
            <form action="{{ route('weddings.destroy', $wedding->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this wedding?')">Delete Wedding</button>
            </form>
        </div>
    </div>
@endsection
