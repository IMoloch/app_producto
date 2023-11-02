{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Categories
                        </h2>
                        <a href="{{ route('categories.index') }}" class="btn-blue">
                            View Categories
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Products
                        </h2>
                        <a href="{{ route('products.index') }}" class="btn-blue">
                            View Products
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Purchases
                        </h2>
                        <a href="{{ route('purchases.index') }}" class="btn-blue">
                            View Purchases
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Sells
                        </h2>
                        <a href="{{ route('sells.index') }}" class="btn-blue">
                            View Sells
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


