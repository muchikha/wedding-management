<!-- resources/views/budget/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Budget Items</h1>
        <a href="{{ route('budget.create') }}" class="btn btn-primary mb-3">Add New Budget Item</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($budgetItems as $item)
                    <tr>
                        <td>{{ $item->description }}</td>
                        <td>${{ number_format($item->amount, 2) }}</td>
                        <td>{{ ucfirst($item->status) }}</td>
                        <td>
                            <a href="{{ route('budget.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('budget.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
