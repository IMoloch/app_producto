<?php

namespace App\Http\Controllers\Sell;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Sell;
use App\Models\Product;

class EditSellController extends Controller
{
    public function edit(Sell $sell)
    {
        $products = Product::all();
        return view('sells.edit', compact('sell', 'products'));
    }

    public function update(Request $request, Sell $sell)
    {
        $data = $request->validate([
            'id_Product' => 'required|exists:products,id', // Validate the product ID
            'cant' => 'required|numeric',                 // Quantity should be numeric
            'precio' => 'required|numeric',               // Price should be numeric
        ]);

        $sell->update($data);

        return redirect()->route('sells.index')->with('success', 'Sell updated successfully');
    }
}
