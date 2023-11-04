<?php

namespace App\Http\Controllers\Sell;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller from the Illuminate\Routing namespace
use App\Models\Sell;




class CreateSellController extends Controller
{
    public function create()
    {
        return view('sells.create');
    }

    public function store(Request $request)
    {
        // Validation logic here

        Sell::create([
            'id_Product' => $request->input('id_Product'),
            'cant' => $request->input('cant'),
            'precio' => $request->input('precio'),
        ]);

        return redirect()->route('sells.index')->with('success', 'Sell created successfully');
    }
}
