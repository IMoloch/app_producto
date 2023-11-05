<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
            Sells
        </h2>
      </div>
      <table class="table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Product</th>
            <th class="px-4 py-2">Quantity</th>
            <th class="px-4 py-2">Cost</th>
            <th class="px-4 py-2">Date</th>
          </tr>
        </thead>
          <tbody>
            @foreach ($sells as $sell)
                <tr>
                  <td class="px-4 py-2">{{ $sell->id }}</td>
                  <td class="px-4 py-2">
                    @foreach ($products as $product)
                      @if ($sell->id_Product == $product->id) {{ $product->name }} @endif
                    @endforeach
                  </td>
                  <td class="px-4 py-2">{{ $sell->cant }}</td>
                  <td class="px-4 py-2">${{ number_format($sell->precio, 2) }}</td>
                  <td class="px-4 py-2">{{ $sell->created_at }}</td>
                </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>