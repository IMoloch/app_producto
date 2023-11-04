<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        return view('purchases.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'quantity' => 'required|numeric',
            'product_id' => 'required|numeric',
            'cost' => 'required|numeric',
            // Add validation rules for other fields as needed
        ]);

        Purchase::create($data);

        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        return view('purchases.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        return view('purchases.edit', compact('purchase'));
    }

    public function update(Request $request, Purchase $purchase)
    {
        $data = $request->validate([
            'quantity' => 'required|numeric',
            'product_id' => 'required|numeric',
            'cost' => 'required|numeric',
            // Add validation rules for other fields as needed
        ]);

        $purchase->update($data);

        return redirect()->route('purchases.index');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchases.index');
    }
}
