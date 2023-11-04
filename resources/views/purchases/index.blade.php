<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Purchases') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Purchases
                    </h2>
                    <div class="mb-4">
                        <a href="{{ route('purchases.create') }}" class="btn-blue btn-blue-tailwind">
                            Create Purchase
                        </a>
                        <a href="{{ route('dashboard') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </div>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Product</th>
                                <th class="px-4 py-2">Quantity</th>
                                <th class="px-4 py-2">Cost</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchases as $purchase)
                                <tr>
                                    <td class="px-4 py-2">{{ $purchase->id }}</td>
                                    <td class="px-4 py-2">{{ $purchase->product->name }}</td>
                                    <td class="px-4 py-2">{{ $purchase->cant }}</td>
                                    <td class="px-4 py-2">${{ number_format($purchase->costo, 2) }}</td>
                                    <td class="px-4 py-2">{{ $purchase->created_at }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn-blue btn-blue-tailwind">Edit</a>
                                        <form action="{{ route('purchases.destroy', $purchase) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-red btn-red-tailwind" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
