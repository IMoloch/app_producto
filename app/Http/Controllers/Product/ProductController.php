<?php

// namespace App\Http\Controllers\Product;

// use Illuminate\Http\Request;
// use Illuminate\Routing\Controller; // Import the base Controller from the Illuminate\Routing namespace
// use App\Models\Product;

// class ProductController extends Controller // Extend the base Controller
// {
//     public function index()
//     {
//         $products = Product::all();

//         return view('products.index', compact('products'));
//     }

//     public function create()
//     {
//         return view('products.create');
//     }

//     public function store(Request $request)
//     {
    
//         $data = new Product();
//         $data->name = $request->name;
//         $data->descripcion = $request->description;
//         $data->price = $request->price;;

//         $data->save();

//         return redirect()->route('products.index');
//     }

//     public function edit(Product $product)
//     {
//         // Logic for editing a product (e.g., retrieve the product and display the edit form)
//         return view('products.edit', compact('product'));
//     }

    
//     public function update(Request $request, String $id)
//     {

//         $data = Product::find($id);
//         $data->name = $request->name;
//         $data->descripcion = $request->description;
//         $data->price = $request->price;

//         $data->update();

//         return redirect()->route('products.index')->with('success', 'Sell updated successfully');
//     }

//     public function destroy(Product $product)
//     {
//         $product->delete();

//         return redirect()->route('products.index');
//     }
// }






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
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = new Product();
        $data->name = $request->name;
        $data->descripcion = $request->description;
        $data->price = $request->price;

        $data->save();

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) // Removed the String type hint
    {
        $data = Product::find($id);
        $data->name = $request->name;
        $data->descripcion = $request->description;
        $data->price = $request->price;

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
