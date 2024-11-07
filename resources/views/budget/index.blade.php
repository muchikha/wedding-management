<!-- resources/views/budget/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-gray-100 rounded-lg">
    <h1 class="text-2xl font-semibold mb-4">Budget Items</h1>
    <a href="{{ route('budget-items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">Add New Budget Item</a>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 mt-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-6 bg-white shadow-lg rounded">
        <thead>
            <tr class="bg-gray-200 text-left text-gray-700 font-semibold">
                <th class="p-4">Description</th>
                <th class="p-4">Amount</th>
                <th class="p-4">Status</th>
                <th class="p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($budgetItems as $item)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-4">{{ $item->description }}</td>
                    <td class="p-4">${{ number_format($item->amount, 2) }}</td>
                    <td class="p-4">{{ ucfirst($item->status) }}</td>
                    <td class="p-4 flex space-x-2">
                        <a href="{{ route('budget-items.edit', $item->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                        <form action="{{ route('budget-items.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
