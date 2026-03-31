@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-md">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">Edit Expense</h1>

    <form method="POST" action="{{ route('expenses.update', $expense) }}" class="bg-white shadow-md rounded-lg p-8">
        @
        

        @method('PUT')
        
        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <input type="text" name="description" id="description" required 
                   value="{{ old('description', $expense->description) }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 @error('description') border-red-500 @enderror">
            @error('description')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" required min="0"
                   value="{{ old('amount', $expense->amount) }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 @error('amount') border-red-500 @enderror">
            @error('amount')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
            <input type="date" name="date" id="date" required 
                   value="{{ old('date', $expense->date->format('Y-m-d')) }}" 
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 @error('date') border-red-500 @enderror">
            @error('date')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition duration-200">
                Update Expense
            </button>
            <a href="{{ route('expenses.index') }}" class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md text-center transition duration-200">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

