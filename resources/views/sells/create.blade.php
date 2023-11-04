<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Sell') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Create Sell
                    </h2>
                    <form method="POST" action="{{ route('sells.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="product_id" class="block text-gray-700 dark:text-gray-300">Product ID</label>
                            <input type="number" name="id_Product" id="id_Product" class="form-input form-input-tailwind" required>
                        </div>
                        <div class="mb-4">
                            <label for="quantity" class="block text-gray-700 dark:text-gray-300">Quantity</label>
                            <input type="number" name="cant" id="cant" class="form-input form-input-tailwind" required>
                        </div>
                        <div class="mb-4">
                            <label for "price" class="block text-gray-700 dark:text-gray-300">Price</label>
                            <input type="number" name="precio" id="precio" class="form-input form-input-tailwind" required>
                        </div>
                        <button type="submit" class="btn-blue btn-blue-tailwind">Create Sell</button>
                        <a href="{{ route('sells.index') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
