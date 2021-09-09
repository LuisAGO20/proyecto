<x-app-layout>
    <br>
    <a class="btn btn-primary" href="{{ route('clienteNuevo') }}" role="button">
        <i class="fas fa-plus"></i> Ingresar un nuevo Usuario
    </a>
    <br>
    <br>
    <div class="table-responsive">
        <div class="card text-center">
            <h2><span class="badge bg-secondary">Listado de Usuarios</span></h2>
        </div>
        <br>
        <table class="table table-success table-striped">
            <thead>
                <th scope="col"><i class="far fa-user"></i> NOMBRES</th>
                <th scope="col"><i class="far fa-user"></i> APELLIDOS</th>
                <th scope="col"><i class="far fa-envelope"></i> CORREO ELECTRÓNICO</th>
                <th scope="col"><i class="fas fa-address-card"></i> CÉDULA</th>
                <th scope="col">OPCIONES</th>
            </thead>

            <tbody>
            @foreach($listado_clientes as $cliente)
                <tr>
                    <td>
                        {{ $cliente->nombres }}
                    </td>
                    <td>
                        {{ $cliente->apellidos}}
                    </td>
                    <td>
                        {{ $cliente->email }}
                    </td>
                    <td>
                        {{ $cliente->cedula }}
                    </td>
                    <td>
                        <a href="{{route('editarCliente',$cliente->id)}}" class="btn btn-primary">
                            <i class="fas fa-edit"></i>Editar</a>

                        <a href="{{ route('eliminarCliente',$cliente->id) }}" class="btn btn-danger">
                            <i class="fas fa-trash"></i>Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
