<x-app-layout>

    <div class="card">
        <h2>Registro de Ventas </h2>
        <div class="card-body">
            <form method="POST" action="{{ route('guardarVenta') }}">

                @csrf
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="producto_select">
                        <option value="" selected>SELECCIONE EL PRODUCTO</option>
                        @foreach ($productos as $producto)
                            <option value="{{ $producto->id }}">
                                {{ $producto->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" value="{{ old('cantidad') }}" name="cantidad">
                </div>

                <div class="mb-3">
                  <label for="total" class="form-label">Total a Pagar</label>
                  <input type="text" class="form-control" id="total" value="{{ old('total') }}" name="total">
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-file-download"></i> Guardar</button>
                <a class="btn btn-danger" href="{{ route('dashboard') }}"><i class="fas fa-ban"></i> Cancelar</a>
              </form>
        </div>
    </div>


    <div class="card text-center">
        <div class="card-header">
            <h2><span class="badge bg-secondary">Listado de Ventas</span></h2>
        </div>
        <div class="card-body">
            <table class="table table-success table-striped">
                <thead>
                    <th scope="col"><i class="fas fa-sign-in-alt"></i> Fecha Venta</th>
                    <th scope="col"><i class="fab fa-product-hunt"></i> Nombre Producto</th>
                    <th scope="col"><i class="fas fa-sort-amount-up-alt"></i> Cantidad</th>
                    <th scope="col"><i class="fas fa-shopping-cart"></i> Total a Pagar</th>
                </thead>
                <tbody>

                    @foreach ($listado_ventas as $venta )
                    <tr class="table-active">
                        <td>
                            {{ $venta->created_at}}
                        </td>
                        <td>
                            @if($venta->producto)
                                    {{ $venta->producto->nombre}}
                            @endif
                        </td>
                        <td>
                            {{ $venta->cantidad}}
                        </td>
                        <td>
                            {{ $venta->total}}
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        <div class="card-footer text-muted"></div>
    </div>
    <br>
    <br>
    <a href="{{ route('descargarPDF') }}" class="btn -btn-sm btn-primary">Generar Reporte </a>

</x-app-layout>
