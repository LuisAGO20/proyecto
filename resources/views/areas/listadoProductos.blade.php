<x-app-layout>
    <br>
    <br>
    <div class="btn btn-primary btn-lg">
        <a class="btn btn-primary" href="{{ route('productosNuevo') }}" role="button" ><i class="far fa-plus-square"></i> Ingresar un nuevo Producto</a>
    </div>

    <br>
    <br>
    <div class="card text-center">
        <div class="card-header">
            <h2><span class="badge bg-secondary">Listado de Productos</span></h2>
        </div>
        <div class="card-body">
            <table class="table table-success table-striped">
                <thead>
                    <th scope="col">Ingreso Producto</th>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Compra</th>
                    <th scope="col">Venta</th>
                    <th scope="col">Opciones</th>
                </thead>
                <tbody>

                    @foreach ($listado_productos as $producto )
                    <tr class="table-active">
                        <td>
                            {{ $producto->created_at}}
                        </td>
                        <td>
                            {{ $producto->nombre}}
                        </td>
                        <td>
                            {{ $producto->marca}}
                        </td>
                        <td>
                            {{ $producto->cantidad}}
                        </td>
                        <td>
                            {{ $producto->valorCompra}}
                        </td>
                        <td>
                            {{ $producto->valorVenta}}
                        </td>
                        <td>
                            <a href="{{route('editarProducto',$producto->id)}}" button type="button" class="btn btn-success"><i class="fas fa-edit"></i>Editar</a>
                            <a href="{{ route('eliminarProducto',$producto->id) }}" button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>Eliminar</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <a class="btn btn-danger" href="{{ route('areas') }}"><i class="fas fa-undo-alt"></i>Regresar</a>
        </div>
        <div class="card-footer text-muted"></div>
    </div>
</x-app-layout>
