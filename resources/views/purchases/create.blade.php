<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Purchase') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Create Purchase
                    </h2>
                    <form method="POST" action="{{ route('purchases.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="productos" class="block text-gray-700 dark:text-gray-300">Producto</label>
                            <select name="productos" id="id" class="form-select form-input-tailwind" required>
                                @foreach ($productos as $id)
                                    <option value = "{{$id->id}}">{{$id->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="quantity" class="block text-gray-700 dark:text-gray-300">Quantity</label>
                            <input type="number" name="cant" id="cant" class="form-input form-input-tailwind" required>
                        </div>
                        <div class="mb-4">
                            <label for="cost" class="block text-gray-700 dark:text-gray-300">Cost</label>
                            <input type="number" name="costo" id="costo" class="form-input form-input-tailwind" required>
                        </div>
                        <button type="submit" class="btn-blue btn-blue-tailwind save" id="save">Create Purchase</button>
                        <a href="{{ route('purchases.index') }}" class="btn-blue btn-blue-tailwind mt-4">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('save').onclick = function(){
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Los datos han sido guardados',
        showConfirmButton: false,
        timer: 5500
        })
    };
    </script>
</x-app-layout>
