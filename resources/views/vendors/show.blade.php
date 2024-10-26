<!-- resources/views/vendors/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Vendor Details</h1>

<p><strong>Name:</strong> {{ $vendor->name }}</p>
<p><strong>Service:</strong> {{ $vendor->service }}</p>
<p><strong>Contact:</strong> {{ $vendor->contact }}</p>
<p><strong>Email:</strong> {{ $vendor->email }}</p>

<a href="{{ route('vendors.index') }}">Back to List</a>
@endsection
