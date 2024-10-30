<!-- resources/views/budget/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Budget Item</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('budget.update', $budgetItem->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $budgetItem->description }}" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" step="0.01" value="{{ $budgetItem->amount }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="planned" {{ $budgetItem->status == 'planned' ? 'selected' : '' }}>Planned</option>
                    <option value="spent" {{ $budgetItem->status == 'spent' ? 'selected' : '' }}>Spent</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Budget Item</button>
            <a href="{{ route('budget.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
