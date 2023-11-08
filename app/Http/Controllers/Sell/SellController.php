<?php

namespace App\Http\Controllers\Sell;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf; //Import DOMPDF library
use App\Models\Sell;
use App\Models\Product;

class SellController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $sells = Sell::all();
        return view('sells.index',  [
            'sells' => DB::table('sells')->paginate(10)
        ], compact('products'));   
    }

    public function create()
    {
        $productos= Product::all();
        return view('sells.create', compact('productos'));
    }

    public function store(Request $request)
    {

        $data = new Sell();
        $data->cant = $request->cant;
        $data->id_Product = $request->productos;
        $data->precio = $request->precio;
        $data->save();
        $products = Product::find($request->productos);
        $products->stock = $products->stock - $request->cant;
        $products->update();
        return redirect()->route('sells.index');

    }

    public function edit(Sell $sell)
    {
        $products = Product::all();
        return view('sells.edit', compact('sell', 'products'));
    }

    public function update(Request $request, String $id)
    {
        $data = Sell::find($id);
        // Devolvemos el stock del producto a como etaba antes de crear la venta
        $products = Product::find($data->id_Product);
        $products->stock = $products->stock + $data->cant;
        $products->update();
        //Asignamos los nuevos valores a la instancia del modelo Sell
        $data->cant = $request->cant;
        $data->id_Product = $request->id_Product;
        $data->precio = $request->precio;
        // Actualizamos el tick del producto con la informacion actualizada
        $products = Product::find($request->id_Product);
        $products->stock = $products->stock - $request->cant;
        $products->update();
        $data->update();

        return redirect()->route('sells.index')->with('success', 'Sell updated successfully');
    }

    public function destroy(Sell $sell)
    {
        $products = Product::find($sell->id_Product);
        $products->stock = $products->stock + $sell->cant;
        $products->update();
        $sell->delete();
        return redirect()->route('sells.index');
    }

    public function report()
    {
        $sells = Sell::all();
        $products = Product::all();
        $pdf = Pdf::loadView('reports.sells', compact('products','sells'));
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('archivo.pdf');
    }
}   

