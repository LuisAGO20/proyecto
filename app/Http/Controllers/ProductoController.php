<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $data = array('listado_productos' => Producto::all() );
        return view('productos.index',$data);
    }

    public function nuevo()
    {
        return view('productos.nuevo',['areas'=>Area::all()]);
    }

    //Luis, metodo para recibir datos del formulario y almacenar en base de datos 02/08/2021
    public function guardar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:productos|max:250',
            'descripcion' => 'nullable|max:255',
        ]);

        $producto=new Producto();
        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->descripcion=$request->descripcion;
        $producto->cantidad=$request->cantidad;
        $producto->valorCompra=$request->valorCompra;
        $producto->valorVenta=$request->valorVenta;
        $producto->area_id=$request->area_select;

        $producto->save();

        $request->session()->flash('estado','Producto Ingresado correctamente');
        return redirect()->route('productos');
    }

    public function eliminar($id)
    {
        $producto=Producto::find($id);
        return view('productos.eliminar',['producto'=>$producto]);
    }

    public function confirmarEliminar(Request $request, $id)
    {
        Producto::destroy($id);
        $request->session()->flash('estado','Producto eliminado correctamente');
        return redirect()->route('productos');
    }

    //Luis: método para editar producto, recibe un parametro de entrada que es el id
    public function editar($id)
    {
        $sql_producto=Producto::find($id);
        return view('productos.editar',['producto'=>$sql_producto],['areas'=>Area::all()]);
    }

    public function actualizar(Request $request)
    {
        $request->validate([

        ]);

        $producto=Producto::find($request->id);
        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->descripcion=$request->descripcion;
        $producto->cantidad=$request->cantidad;
        $producto->valorCompra=$request->valorCompra;
        $producto->valorVenta=$request->valorVenta;
        $producto->area_id=$request->area_select;
        $producto->save();
        $request->session()->flash('estado', 'Producto actualizado correctamente');
        return redirect()->route('productos');

    }
}
