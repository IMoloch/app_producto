<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Purchase') }}
        </h2>
    </x-slot>
<@php
@endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Edit Purchase
                    </h2>
                    <form method="POST" action="{{ route('purchases.update', $purchase->id) }}">
                        @csrf
                        @method('PUT')
                                <div class="mb-4">
                                    <label for="id_Product" class="block text-gray-700 dark:text-gray-300">Product</label>
                                    <select name="id_Product" id="id_Product" class="form-select form-input-tailwind" required>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}" @if ($purchase->id_Product == $product->id) selected @endif>{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        <div class="mb-4">
                            <label for="cant" class="block text-gray-700 dark:text-gray-300">Quantity</label>
                            <input type="number" name="cant" id="cant" class="form-input form-input-tailwind" value="{{ $purchase->cant }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="costo" class="block text-gray-700 dark:text-gray-300">Cost</label>
                            <input type="number" step="0.01" name="costo" id="costo" class="form-input form-input-tailwind" value="{{ $purchase->costo }}" required>
                        </div>
                        <!-- Add input fields for other purchase details -->
                        <!-- For example:
                        <label for="your_field_name" class="block text-gray-700 dark:text-gray-300">Your Field Label</label>
                        <input type="text" name="your_field_name" id="your_field_name" class="form-input form-input-tailwind" value="{{ $purchase->your_field_name }}" required>
                        -->
                        <button type="submit" class="btn-blue btn-blue-tailwind">Update Purchase</button>
                    </form>
                </div>
                <div class="p-6">
                    <a href="{{ route('purchases.index') }}" class="btn-blue btn-blue-tailwind">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
