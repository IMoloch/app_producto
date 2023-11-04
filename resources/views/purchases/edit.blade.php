<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Purchase') }}
        </h2>
    </x-slot>
<@php
    var_dump($purchase);
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
                            <label for="quantity" class="block text-gray-700 dark:text-gray-300">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-input form-input-tailwind" value="{{ $purchase->cant }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="product_id" class="block text-gray-700 dark:text-gray-300">Product ID</label>
                            <input type="number" name="product_id" id="product_id" class="form-input form-input-tailwind" value="{{ $purchase->id_Product }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="cost" class="block text-gray-700 dark:text-gray-300">Cost</label>
                            <input type="number" name="cost" id="cost" class="form-input form-input-tailwind" value="{{ $purchase->costo }}" required>
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
