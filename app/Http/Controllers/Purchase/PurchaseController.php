<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Purchase;
use App\Models\Product;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));   
    }

    public function create()
    {
        $productos= Product::all();
        return view('purchases.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $data = new Purchase();
        $data->cant = $request->cant;
        $data->id_Product = $request->productos;
        $data->costo = $request->costo;

        $data->save();

        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        return view('purchases.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        $products = Product::all();
        return view('purchases.edit', compact('purchase', 'products'));
    }


    public function update(Request $request, String $id)
    {
        $data = Purchase::find($id);
        $data->cant = $request->cant;
        $data->id_Product = $request->id_Product;
        $data->costo = $request->costo;
        $data->update();

        return redirect()->route('purchases.index')->with('success', 'Sell updated successfully');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchases.index');
    }
}
