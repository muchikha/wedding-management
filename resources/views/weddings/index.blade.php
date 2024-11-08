<!-- resources/views/weddings/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upcoming Weddings</h1>
    <a href="{{ route('weddings.create') }}" class="btn btn-primary">Add New Wedding</a>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Available Seats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($weddings as $wedding)
                <tr>
                    <td>{{ $wedding->name }}</td>
                    <td>{{ $wedding->date }}</td>
                    <td>{{ $wedding->time }}</td>
                    <td>{{ $wedding->venue }}</td>
                    <td>{{ $wedding->available_seats }}</td>
                    <td>
                        <a href="{{ route('weddings.show', $wedding->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('weddings.edit', $wedding->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('weddings.destroy', $wedding->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
