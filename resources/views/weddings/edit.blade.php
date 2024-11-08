@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Edit Wedding</h1>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-800 p-3 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('weddings.update', $wedding->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block font-medium">Wedding Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded" value="{{ $wedding->name }}" required>
            </div>
            <div>
                <label for="date" class="block font-medium">Date</label>
                <input type="date" name="date" id="date" class="w-full p-2 border border-gray-300 rounded" value="{{ $wedding->date }}" required>
            </div>
            <div>
                <label for="time" class="block font-medium">Time</label>
                <input type="time" name="time" id="time" class="w-full p-2 border border-gray-300 rounded" value="{{ $wedding->time }}" required>
            </div>
            <div>
                <label for="venue" class="block font-medium">Venue</label>
                <input type="text" name="venue" id="venue" class="w-full p-2 border border-gray-300 rounded" value="{{ $wedding->venue }}" required>
            </div>
            <div>
                <label for="available_seats" class="block font-medium">Available Seats</label>
                <input type="number" name="available_seats" id="available_seats" class="w-full p-2 border border-gray-300 rounded" value="{{ $wedding->available_seats }}" min="1" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Update Wedding</button>
            <a href="{{ route('weddings.index') }}" class="ml-2 text-gray-500">Cancel</a>
        </form>
    </div>
@endsection
