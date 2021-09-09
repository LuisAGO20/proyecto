<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $data = array('listado_areas' => Area::all() );
        return view('areas.index',$data);
    }
    public function nuevo()
    {
        return view('areas.nuevo');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'encargado' => 'required|unique:areas|max:255',
            'nombre' => 'required|unique:areas|max:255',
            'descripcion' => 'required|unique:areas|max:255',
        ]);

        $area=new Area();
        $area->encargado=$request->encargado;
        $area->nombre=$request->nombre;
        $area->descripcion=$request->descripcion;
        $area->save();
        $request->session()->flash('estado','Área ingresada exitosamente');
        return redirect()->route('areas');

    }

    public function eliminar($id)
    {
        $area=Area::find($id);
        return view('areas.eliminar',['area'=>$area]);
    }

    public function confirmarEliminar(Request $request, $id)
    {
        Area::destroy($id);
        $request->session()->flash('estado', 'Área eliminada exitosamente');
        return redirect()->route('areas');
    }

    public function editar($id)
    {
        $sql_area=Area::find($id);
        return view('areas.editar',['area'=>$sql_area]);
    }

    public function actualizar(Request $request)
    {

        $request->validate([

        ]);

        $area=Area::find($request->id);
        $area->encargado=$request->encargado;
        $area->nombre=$request->nombre;
        $area->descripcion=$request->descripcion;
        $area->save();
        $request->session()->flash('estado', 'Área actualizada exitosamente');
        return redirect()->route('areas');

    }


    // Funcion para ver el listado de productos de cada Área
    public function listadoProductos($idArea)
    {
        $area=Area::find($idArea);
        $data = array('listado_productos' =>$area->productos );
        return view('areas.listadoProductos',$data);
    }
}
