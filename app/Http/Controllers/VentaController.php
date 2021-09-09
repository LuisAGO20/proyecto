<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        $data = array('listado_ventas' => Venta::all() );
        return view('ventas.index',['productos'=>Producto::all()],$data);
    }

    //Luis, metodo para recibir datos del formulario y almacenar en base de datos 02/08/2021
    public function guardar(Request $request)
    {
        $request->validate([
            'cantidad' => 'required|unique:ventas|max:250',
        ]);

        $venta=new Venta();
        $venta->cantidad=$request->cantidad;
        $venta->total=$request->total;
        $venta->producto_id=$request->producto_select;

        $venta->save();

        $request->session()->flash('estado','Venta Ingresada exitosamente');
        return redirect()->route('ventas');
    }

    public function PDF()
    {
        $listado_ventas = Venta::all();
        $pdf = PDF::loadView('ventas.ventas', compact('listado_ventas'));
        return $pdf->stream('ventas.pdf');
    }
}
