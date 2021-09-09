<x-app-layout>
    <br>
    <a class="btn btn-primary" href="{{ route('areasNuevo') }}" role="button">
        <i class="far fa-plus-square"></i> Añadir un nuevo Departamento
    </a>
    <br>
    <br>
    <div class="table-responsive">
        <div class="card text-center">
            <h2><span class="badge bg-secondary">Listado de Áreas</span></h2>
        </div>
        <br>
        <table class="table table-success table-striped">
            <thead>
                <th scope="col"><i class="fas fa-user-tie"></i> ENCARGADO</th>
                <th scope="col"><i class="far fa-building"></i> NOMBRE DEL ÁREA</th>
                <th scope="col">DESCRIPCIÓN</th>
                <th scope="col">OPCIONES</th>
            </thead>

            <tbody>
                @foreach($listado_areas as $area)
                <tr>
                    <td>
                        {{ $area->encargado }}
                    </td>
                    <td>
                        {{ $area->nombre }}
                    </td>
                    <td>
                        {{ $area->descripcion}}
                    </td>
                    <td>
                        <a href="{{route('listadoProductosAreas',$area->id)}}" class="btn btn-dark"><i class="fas fa-users"></i>Buscar</a>

                        <a href="{{route('editarArea',$area->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i>Editar</a>

                        <a href="{{ route('eliminarArea',$area->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i>Eliminar</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
