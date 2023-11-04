<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Sell') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <a href="{{ route('sells.index') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Edit Sell
                    </h2>
                    <form method="POST" action="{{ route('sells.update', $sell->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="id_Product" class="block text-gray-700 dark:text-gray-300">Product</label>
                            <select name="id_Product" id="id_Product" class="form-select form-input-tailwind" required>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}" @if ($sell->id_Product == $product->id) selected @endif>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="cant" class="block text-gray-700 dark:text-gray-300">Quantity</label>
                            <input type="number" name="cant" id="cant" class="form-input form-input-tailwind" value="{{ $sell->cant }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="precio" class="block text-gray-700 dark:text-gray-300">Price</label>
                            <input type="number" step="0.01" name="precio" id="precio" class="form-input form-input-tailwind" value="{{ $sell->precio }}" required>
                        </div>
                        <button type="submit" class="btn-blue btn-blue-tailwind">Update Sell</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
