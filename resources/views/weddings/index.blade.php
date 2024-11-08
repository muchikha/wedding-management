@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Upcoming Weddings</h1>

        @if(session('success'))
            <div class="mb-4 bg-green-100 text-green-800 p-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between mb-4">
            <a href="{{ route('weddings.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                Add New Wedding
            </a>
        </div>

        <table class="min-w-full bg-white rounded shadow overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left py-2 px-4 border-b font-medium">Name</th>
                    <th class="text-left py-2 px-4 border-b font-medium">Date</th>
                    <th class="text-left py-2 px-4 border-b font-medium">Time</th>
                    <th class="text-left py-2 px-4 border-b font-medium">Venue</th>
                    <th class="text-left py-2 px-4 border-b font-medium">Available Seats</th>
                    <th class="text-left py-2 px-4 border-b font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weddings as $wedding)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b">{{ $wedding->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $wedding->date }}</td>
                        <td class="py-2 px-4 border-b">{{ $wedding->time }}</td>
                        <td class="py-2 px-4 border-b">{{ $wedding->venue }}</td>
                        <td class="py-2 px-4 border-b">{{ $wedding->available_seats }}</td>
                        <td class="py-2 px-4 border-b flex space-x-2">
                            <a href="{{ route('weddings.show', $wedding->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-1 px-2 rounded">View</a>
                            <a href="{{ route('weddings.edit', $wedding->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded">Edit</a>
                            <form action="{{ route('weddings.destroy', $wedding->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this wedding?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
