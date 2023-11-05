<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Create Category
                    </h2>
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300">Category Name</label>
                            <input type="text" name="name" id="name" class="form-input form-input-tailwind" required>
                        </div>
                        <div class="mb-4" style="clear: right; float:left">
                        <button type="submit" class="btn bg-cyan-600 p-3 leading-8 tracking-widest text-indigo-100 save" id="save">Create Category</button>
                        <a href="{{ route('categories.index') }}" class="btn bg-cyan-600 p-4 m-20 leading-8 tracking-widest text-indigo-100">Back</a>
                        </div>
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
