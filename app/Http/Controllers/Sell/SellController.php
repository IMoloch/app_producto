<?php

namespace App\Http\Controllers\Sell;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Sell;
use App\Models\Product;

class SellController extends Controller
{
    public function index()
    {
        // Fetch a list of sells and pass them to the view
        $products = Product::all();
        $sells = Sell::all();
        return view('sells.index', compact('sells','products'));

    }

    public function create()
    {
        return view('sells.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        // Sell::create([
        //     'id_Product' => $request->input('id_Product'),
        //     'cant' => $request->input('cant'),
        //     'precio' => $request->input('precio'),
        // ]);

        $data = new Sell();
        $data->cant = $request->cant;
        $data->id_Product = $request->id_Product;
        $data->precio = $request->precio;

        $data->save();

        return redirect()->route('sells.index')->with('success', 'Sell created successfully');


    }

    public function edit(Sell $sell)
    {
        $products = Product::all();
        return view('sells.edit', compact('sell', 'products'));
    }

    public function update(Request $request, String $id)
    {
        // $data = $request->validate([
        //     'id_Product' => 'required|exists:products,id', // Validate the product ID
        //     'cant' => 'required|numeric',                 // Quantity should be numeric
        //     'precio' => 'required|numeric',               // Price should be numeric
        // ]);

        $data = Sell::find($id);
        $data->cant = $request->cant;
        $data->id_Product = $request->id_Product;
        $data->precio = $request->precio;

        $data->update();

        return redirect()->route('sells.index')->with('success', 'Sell updated successfully');
    }

    public function destroy(Sell $sell)
    {
        $sell->delete();

        return redirect()->route('sells.index');
    }
}   

