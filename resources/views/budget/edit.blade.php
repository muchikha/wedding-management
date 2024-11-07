<!-- resources/views/budget/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-gray-100 rounded-lg">
    <h1 class="text-2xl font-semibold mb-6">Edit Budget Item</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-6 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('budget-items.update', $budgetItem->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <input type="text" name="description" id="description" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" value="{{ $budgetItem->description }}" required>
        </div>
        <div>
            <label for="amount" class="block text-gray-700 font-medium mb-2">Amount</label>
            <input type="number" name="amount" id="amount" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" step="0.01" value="{{ $budgetItem->amount }}" required>
        </div>
        <div>
            <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
            <select name="status" id="status" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500" required>
                <option value="planned" {{ $budgetItem->status == 'planned' ? 'selected' : '' }}>Planned</option>
                <option value="spent" {{ $budgetItem->status == 'spent' ? 'selected' : '' }}>Spent</option>
            </select>
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">Update Budget Item</button>
            <a href="{{ route('budget-items.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
        </div>
    </form>
</div>
@endsection
