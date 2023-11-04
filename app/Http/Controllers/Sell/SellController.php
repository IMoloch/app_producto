<?php

namespace App\Http\Controllers\Sell;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Sell;

class SellController extends Controller
{
    public function index()
    {
        // Fetch a list of sells and pass them to the view
        $sells = Sell::all();
        return view('sells.index', compact('sells'));
    }

    public function create()
    {
        return view('sells.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        Sell::create([
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('sells.index')->with('success', 'Sell created successfully');
    }
}

