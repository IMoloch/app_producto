<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller from the Illuminate\Routing namespace
use App\Models\Product;

class ProductController extends Controller // Extend the base Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Logic for displaying the create form for a new product
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', // Replace with actual validation rules for 'name'
            'description' => 'required|string', // Replace with actual validation rules for 'description'
            'price' => 'required|numeric', // Replace with actual validation rules for 'price'
        ]);

        Product::create($data);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        // Logic for editing a product (e.g., retrieve the product and display the edit form)
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', // Replace with actual validation rules for 'name'
            'description' => 'required|string', // Replace with actual validation rules for 'description'
            'price' => 'required|numeric', // Replace with actual validation rules for 'price'
        ]);

        $product->update($data);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
