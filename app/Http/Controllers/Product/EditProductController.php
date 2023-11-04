<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller
use App\Models\Product;

class EditProductController extends Controller // Extend the base Controller
{
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product->update($data);

        return redirect()->route('products.index');
    }
}

