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
                        <button type="button" class="btn-blue btn-blue-tailwind update" id="update">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    //     document.getElementById('update').onclick = function(){

    //     Swal.fire({
    //     position: 'top-end',
    //     icon: 'success',
    //     title: 'Los datos han sido guardados',
    //     showConfirmButton: false,
    //     timer: 5500
    //     })
    // };

        // Selecciona el botón con la clase "update"
        const updateButton = document.querySelector('.update');

        updateButton.addEventListener('click', () => {
            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success');
                    const form = updateButton.closest('form');
                    form.submit();
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info');
                }
            });
        });
    </script>
</x-app-layout>
