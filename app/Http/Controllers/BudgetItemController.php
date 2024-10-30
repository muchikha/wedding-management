<?php

namespace App\Http\Controllers;

use App\Models\BudgetItem;
use Illuminate\Http\Request;

class BudgetItemController extends Controller
{
    // Display a listing of budget items
    public function index()
    {
        $budgetItems = BudgetItem::all();
        return view('budget.index', compact('budgetItems'));
    }

    // Show the form for creating a new budget item
    public function create()
    {
        return view('budget.create');
    }

    // Store a newly created budget item in the database
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'status' => 'required|in:planned,spent',
        ]);

        // Use only the validated data for creation
        BudgetItem::create($request->only(['description', 'amount', 'status']));

        // Redirect with the correct route name
        return redirect()->route('budget-items.index')->with('success', 'Budget item added successfully.');
    }

    // Show the form for editing the specified budget item
    public function edit(BudgetItem $budgetItem)
    {
        return view('budget.edit', compact('budgetItem'));
    }

    // Update the specified budget item in the database
    public function update(Request $request, BudgetItem $budgetItem)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'status' => 'required|in:planned,spent',
        ]);

        $budgetItem->update($request->only(['description', 'amount', 'status']));

        return redirect()->route('budget-items.index')->with('success', 'Budget item updated successfully.');
    }

    // Remove the specified budget item from the database
    public function destroy(BudgetItem $budgetItem)
    {
        $budgetItem->delete();

        return redirect()->route('budget-items.index')->with('success', 'Budget item deleted successfully.');
    }
}
