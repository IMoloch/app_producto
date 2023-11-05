<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Update the base Controller import
use App\Models\Product;
use App\Models\Category; // Import the Category model

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories= Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = new Product();
        $data->name = $request->name;
        $data->descripcion = $request->description;
        $data->price = $request->price;
        $data->id_Category = $request -> id_Category;
        $data->save();

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $categories= Category::all();
        return view('products.edit', compact('categories', 'product'));
    }

    public function update(Request $request, $id) // Removed the String type hint
    {
        $data = Product::find($id);
        $data->name = $request->name;
        $data->descripcion = $request->description;
        $data->price = $request->price;
        $data->id_Category = $request -> id_Category;

        $data->update();

        return redirect()->route('products.index')->with('success', 'Sell updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }

    public function updateCategory($productId)
    {
        // Find the product by ID
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Logic to determine the category based on the product name
        $category = Category::where('name', 'LIKE', '%' . $product->name . '%')->first();

        if ($category) {
            $product->id_Category = $category->id;
            $product->save();

            return response()->json(['message' => 'Category updated successfully']);
        } else {
            return response()->json(['message' => 'No matching category found'], 404);
        }
    }
}
