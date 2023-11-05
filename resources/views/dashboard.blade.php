<x-app-layout class="">
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tigh">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6" style="float:left; clear:right;">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Categories
                        </h2>
                        <a href="{{ route('categories.index') }}" class="btn bg-emerald-300 p-3 leading-8 tracking-widest">
                            View Categories
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Products
                        </h2>
                        <a href="{{ route('products.index') }}" class="btn bg-emerald-300 p-3 leading-8 tracking-widest">
                            View Products
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Purchases
                        </h2>
                        <a href="{{ route('purchases.index') }}" class="btn bg-emerald-300 p-3 leading-8 tracking-widest">
                            View Purchases
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Manage Sells
                        </h2>
                        <a href="{{ route('sells.index') }}" class="btn bg-emerald-300 p-3 leading-8 tracking-widest">
                            View Sells
                        </a>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                            Grafico de Categorias
                        </h2>
                        <a href="{{ route('graph.index') }}" class="btn bg-emerald-300 p-3 leading-8 tracking-widest">
                            View Graph
                        </a>
                    </div>
                </div>
                <img src="{{url('/img/products.jpg')}}" alt="Image" style="border-radius:40px; margin-left:45%; width:55%"/>
            </div>
        </div>
    </div>
</x-app-layout>


