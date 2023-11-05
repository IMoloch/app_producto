<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Create Product
                    </h2>
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="categories" class="block text-gray-700 dark:text-gray-300">Category</label>
                            <select name="id_Category" id="id_Category" class="form-select form-input-tailwind" required>
                    @foreach ($categories as $category)
                        <option value = "{{$category->id}}">{{$category->name }}</option>
                    @endforeach
                        </select>
                    </div>

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300">Product Name</label>
                            <input type="text" name="name" id="name" class="form-input form-input-tailwind" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 dark:text-gray-300">Description</label>
                            <textarea name="description" id="description" class="form-textarea form-textarea-tailwind" ></textarea>
                        </div>

                        <div class="mb-4">
                            <label for "price" class="block text-gray-700 dark:text-gray-300">Price</label>
                            <input type="number" name="price" id="price" class="form-input form-input-tailwind" required>
                        </div>
                        <button type="submit" class="btn-blue btn-blue-tailwind">Create Product</button>
                    </form>
                    <a href="{{ route('products.index') }}" class="btn-blue btn-blue-tailwind mt-4">Back</a> <!-- Add a Back button to go to the Products view -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
