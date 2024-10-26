<!-- resources/views/vendors/edit.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Edit Vendor</h1>

<form action="{{ route('vendors.update', $vendor->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $vendor->name }}" required>
    
    <label for="service">Service:</label>
    <input type="text" name="service" value="{{ $vendor->service }}" required>
    
    <label for="contact">Contact:</label>
    <input type="text" name="contact" value="{{ $vendor->contact }}" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $vendor->email }}" required>
    
    <button type="submit">Update Vendor</button>
</form>
@endsection
