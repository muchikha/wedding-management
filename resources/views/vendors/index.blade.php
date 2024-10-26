<!-- resources/views/vendors/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Vendors List</h1>
<a href="{{ route('vendors.create') }}" class="btn btn-primary">Add Vendor</a>

@if($vendors->count())
    <ul>
        @foreach($vendors as $vendor)
            <li>{{ $vendor->name }} - {{ $vendor->service }}
                <a href="{{ route('vendors.edit', $vendor->id) }}">Edit</a>
                <a href="{{ route('vendors.show', $vendor->id) }}">View</a>
            </li>
        @endforeach
    </ul>
@else
    <p>No vendors found.</p>
@endif
@endsection
