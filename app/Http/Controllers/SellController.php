<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Sell;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sells = Sell::paginate(10);
        return view('sells.index', ['sells' => $sells]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sells.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Add your validation and storage logic here.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sell = Sell::find($id);
        return view('sells.show', ['sell' => $sell]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sell = Sell::find($id);
        return view('sells.edit', ['sell' => $sell]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Add your validation and update logic here.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Add your deletion logic here.
    }
}
