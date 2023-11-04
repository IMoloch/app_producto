<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller from the Illuminate\Routing namespace
use App\Models\Product;

class ShowProductController extends Controller // Extend the base Controller
{
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
