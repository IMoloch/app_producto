<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller
use App\Models\Product;

class CreateProductController extends Controller // Extend the base Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Product::create($data);

        return redirect()->route('products.index');
    }
}
