<!-- resources/views/testimonials/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Submit Your Testimonial</h1>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('testimonials.store') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="font-semibold">Your Name</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="message" class="font-semibold">Your Message</label>
                <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit Testimonial</button>
        </form>
    </div>
@endsection
