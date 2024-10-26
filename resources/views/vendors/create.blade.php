<!-- resources/views/vendors/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Add New Vendor</h1>

<form action="{{ route('vendors.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <label for="service">Service:</label>
    <input type="text" name="service" required>
    
    <label for="contact">Contact:</label>
    <input type="text" name="contact" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    
    <button type="submit">Add Vendor</button>
</form>
@endsection
