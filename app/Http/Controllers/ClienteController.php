<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $data = array('listado_clientes' => User::all() );
        return view('usuarios.index',$data);
    }
    public function nuevo()
    {
        return view('usuarios.nuevo');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'nombres' => 'required|unique:users|max:255',
            'apellidos' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'cedula' => 'required|unique:users|max:255',
        ]);

        $cliente=new User();
        $cliente->name='';
        $cliente->email=$request->email;
        $cliente->password=$request->cedula.'@inventario.com';
        $cliente->nombres=$request->nombres;
        $cliente->apellidos=$request->apellidos;
        $cliente->cedula=$request->cedula;
        $cliente->save();
        $request->session()->flash('estado','Nuevo Usuario Ingresado');
        return redirect()->route('clientes');

    }

    public function eliminar($id)
    {
        $cliente=User::find($id);
        return view('usuarios.eliminar',['cliente'=>$cliente]);
    }

    public function confirmarEliminar(Request $request, $id)
    {
        User::destroy($id);
        $request->session()->flash('estado', 'Usuario eliminado exitosamente');
        return redirect()->route('clientes');
    }

    public function editar($id)
    {
        $sql_cliente=User::find($id);
        return view('usuarios.editar',['cliente'=>$sql_cliente]);
    }

    public function actualizar(Request $request)
    {

        $request->validate([
            'email' => 'required|unique:users|max:255',
        ]);

        $cliente=User::find($request->id);
        $cliente->name='';
        $cliente->email=$request->email;
        $cliente->password=$request->cedula.'@inventario.com';
        $cliente->nombres=$request->nombres;
        $cliente->apellidos=$request->apellidos;
        $cliente->cedula=$request->cedula;
        $cliente->save();
        $request->session()->flash('estado','Registro actualizado exitosamente');
        return redirect()->route('clientes');
    }
}
