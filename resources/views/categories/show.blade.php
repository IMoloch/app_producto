<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                        Category Details
                    </h2>
                    <p class="text-gray-700 dark:text-gray-300">Category Name: {{ $category->name }}</p>
                    <!-- Add more category details here -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
