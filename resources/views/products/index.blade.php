<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-indigo-300 mb-4">
                        Products
                    </h2>
                    <a href="{{ route('dashboard') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    <a href="{{ route('products.create') }}" class="btn-blue btn-blue-tailwind mb-4">
                        Create New Product
                    </a>
                    <a href="{{ route('products.report') }}" class="btn-blue btn-blue-tailwind mb-4">
                        Ver PDF
                    </a>
                    <table class="table-auto dark:text-white">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Price</th>
                                <th class="px-4 py-2">Category ID</th>
                                <th class="px-4 py-2">Stock</th>
                                <th class="px-4 py-2">Codigo QR </th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="px-4 py-2">{{ $product->name }}</td>
                                    <td class="px-4 py-2">{{ $product->descripcion }}</td>
                                    <td class="px-4 py-2">{{ $product->price }}</td>
                                    <td class="px-4 py-2">{{ $product->id_Category }}</td>
                                    <td class="px-4 py-2">{{ $product->stock}}</td>
                                    <td class="px-4 py-2">
                                        {{-- !-- Button trigger modal --> --}}
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">
                                        Ver QR
                                        </button>
                                    </td>
                                    {{-- <td class="px-4 py-2">{!! QrCode::margin(1)->size(150)->generate($product->name.'.  Stock: '.$product->stock.' unidades. Precio: $'.$product->price); !!}</td> --}}
                                    <td class="px-4 py-2">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn-blue btn-blue-tailwind">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-red btn-red-tailwind delete" id="delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- <-- Modal --> --}}
                                <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Modal Body -->
                                        <div class="center">
                                        {!! QrCode::margin(1)->size(475)->generate($product->name.'.  Stock: '.$product->stock.' unidades. Precio: $'.$product->price); !!}
                                        </div>
                                    </div>
                                </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
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
