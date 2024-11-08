@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-3xl font-semibold text-center mb-8">Leave a Testimonial</h1>

    <!-- Display Success or Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Testimonial Form -->
    <form action="{{ route('testimonials.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Your Testimonial</label>
            <textarea name="message" id="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Testimonial</button>
    </form>
</div>
@endsection
