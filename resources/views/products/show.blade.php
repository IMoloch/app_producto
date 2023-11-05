<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Product Details
                    </h2>
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Price:</strong> ${{ $product->price }}</p>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn-blue btn-blue-tailwind mt-4">Edit Product</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
