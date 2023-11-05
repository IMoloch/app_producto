<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <a href="{{ route('categories.index') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Edit Category
                    </h2>
                    <form method="POST" action="{{ route('categories.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300">Category Name</label>
                            <input type="text" name="name" id="name" class="form-input form-input-tailwind" value="{{ $category->name }}" required>
                        </div>
                        <button type="submit" class="btn-blue btn-blue-tailwind">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
