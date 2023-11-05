<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Categories
                    </h2>
                    <div class="mb-4">
                        <a href="{{ route('categories.create') }}" class="btn-blue btn-blue-tailwind">
                            Create New Category
                        </a>
                        <a href="{{ route('dashboard') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </div>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="px-4 py-2">{{ $category->id }}</td>
                                    <td class="px-4 py-2">{{ $category->name }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn-blue btn-blue-tailwind">Edit</a>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-red btn-red-tailwind delete" id="delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
          document.addEventListener('DOMContentLoaded', function(){
        //Selecciona el boton con la clase eliminar tarea
        const deleteButtons = document.querySelectorAll('.delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
            Swal.fire({
                title: 'Estas seguro?',
                text: "No podras revertir este proceso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Eliminado!',
                    'Tu registro ha sido borrado',
                    'success'
                    )
                    button.closest('form').submit();
            }
            })
        })
    })
});
</script>


</x-app-layout>
