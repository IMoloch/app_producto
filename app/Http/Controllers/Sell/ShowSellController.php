<?php

namespace App\Http\Controllers\Sell;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller from the Illuminate\Routing namespace
use App\Models\Sell;

class ShowSellController extends Controller // Extend the base Controller
{
    public function show(Sell $sell)
    {
        return view('sells.show', compact('sell'));
    }
}
