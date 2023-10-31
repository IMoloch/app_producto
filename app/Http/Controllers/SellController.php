<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sell;


class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sells = Sell::all();
        return view('sells.index', ['sells' => DB:table('sells') -> paginate(10)]);
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
    public function edit(Sell $sells)
    {
        //
        return redirect()->route('sells.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sell $sells)
    {
        //
             // Valida y actualiza la tarea existente en la base de datos
             $validatedData = $request->validate([
                'titulo' => 'required',
                'descripcion' => 'required',
                'estado' => 'required',
            ]);
      
            $sells->update($validatedData);
        
            return redirect()->route('sells.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Elimina la tarea de la base de datos
        $sells-> delete();
        return redirect()->route('sells.index')->with('success','Tarea Eliminada');
    }
}
