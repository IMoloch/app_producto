<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf; //Import DOMPDF library
use App\Models\Purchase;
use App\Models\Product;

class PurchaseController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $purchases = Purchase::all();
        return view('purchases.index', ['purchases'=> DB::table('purchases')->paginate(10)], compact('products'));   
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
        $products = Product::find($request->productos);
        $products->stock = $products->stock + $request->cant;
        $products->update();
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
        // Devolvemos el stock del producto a como etaba antes de crear la venta
        $products = Product::find($data->id_Product);
        $products->stock = $products->stock - $data->cant;
        $products->update();
        //Asignamos los nuevos valores a la instancia del modelo Purchase
        $data->cant = $request->cant;
        $data->id_Product = $request->id_Product;
        $data->costo = $request->costo;
        // Actualizamos el tick del producto con la informacion actualizada
        $products = Product::find($request->id_Product);
        $products->stock = $products->stock + $request->cant;
        $products->update();
        $data->update();

        return redirect()->route('purchases.index')->with('success', 'Purchase updated successfully');
    }

    public function destroy(Purchase $purchase)
    {
        $products = Product::find($purchase->id_Product);
        $products->stock = $products->stock - $purchase->cant;
        $products->update();
        $purchase->delete();

        return redirect()->route('purchases.index');
    }

    public function report()
    {
        $purchases = Purchase::all();
        $products = Product::all();
        $pdf = Pdf::loadView('reports.purchases', compact('products','purchases'));
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('archivo.pdf');
    }
}
