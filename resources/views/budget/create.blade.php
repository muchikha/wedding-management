<!-- resources/views/budget/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Budget Item</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('budget-items.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="planned">Planned</option>
                    <option value="spent">Spent</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save Budget Item</button>
            <a href="{{ route('budget-items.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
