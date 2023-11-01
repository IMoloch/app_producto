<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index', ['products' => DB::table('products') -> paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        //
        return redirect()->route('products.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $products)
    {
             // Valida y actualiza la tarea existente en la base de datos
             $validatedData = $request->validate([
                'titulo' => 'required',
                'descripcion' => 'required',
                'estado' => 'required',
            ]);
      
            $products->update($validatedData);
        
            return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $products)
    {
        // Elimina la tarea de la base de datos
        $products-> delete();
        return redirect()->route('products.index')->with('success','Tarea Eliminada');
    }
}
