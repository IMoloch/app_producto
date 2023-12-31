<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <a href="{{ route('products.index') }}" class="btn-blue btn-blue-tailwind">Back</a>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Edit Product
                    </h2>
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="categories" class="block text-gray-700 dark:text-gray-300">Category</label>
                            <select name="id_Category" id="id_Category" class="form-select form-input-tailwind" required>
                    @foreach ($categories as $category)
                        <option value = "{{$category->id}}">{{$category->name }}</option>
                    @endforeach
                        </select>
                    </div>

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300">Product Name</label>
                            <input type="text" name="name" id="name" class="form-input form-input-tailwind" value="{{ $product->name }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 dark:text-gray-300">Description</label>
                            <textarea name="description" id="description" class="form-textarea form-textarea-tailwind" >{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 dark:text-gray-300">Price</label>
                            <input type="number" name="price" id="price" class="form-input form-input-tailwind" value="{{ $product->price }}" required>
                        </div>
                        <button type="button" class="btn-blue btn-blue-tailwind update">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
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
