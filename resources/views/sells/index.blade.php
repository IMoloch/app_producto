<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sells') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Sell listing here -->
                <div class="p-6">
                    <div class="mb-4">
                        <a href="{{ route('sells.create') }}" class="btn-blue btn-blue-tailwind">
                            Create Sell
                        </a>
                        <a href="{{ route('dashboard') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </div>
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Product</th>
                                <th class="px-4 py-2">Quantity</th>
                                <th class="px-4 py-2">Price</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sells as $sell)
                                <tr>
                                    <td class="px-4 py-2">{{ $sell->id }}</td>
                                    <td class="px-4 py-2">
                                        {{-- @if ($sell->products)
                                            {{ $sell->products->name }}
                                        @else
                                            Product Not Found
                                        @endif --}}

                                        @foreach ($products as $product)
                                            @if ($sell->id_Product == $product->id) {{ $product->name }} @endif
                                        @endforeach

                                    </td>
                                    <td class="px-4 py-2">{{ $sell->cant }}</td>
                                    <td class="px-4 py-2">{{ $sell->precio }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('sells.edit', $sell->id) }}" class="btn-blue btn-blue-tailwind">Edit</a>
                                        <form action="{{ route('sells.destroy', $sell->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn-blue btn-blue-tailwind delete" id="delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $sells->links() }}
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
