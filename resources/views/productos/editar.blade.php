<x-app-layout>
    <h2>Complete el formulario para actualizar {{$producto->nombre}}</h2>
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('actualizarProducto') }}">

                @csrf

                <input type="hidden" name="id" value="{{$producto->id}}" />

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre',$producto->nombre)}}" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ej. Cocina Indurama</div>
                  </div>

                  <div class="mb-3">
                      <label for="marca" class="form-label">Marca del Producto</label>
                      <input type="text" class="form-control" id="marca" value="{{ old('marca',$producto->marca)}}" name="marca">
                  </div>

                  <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del Producto</label>
                    <input type="text" class="form-control" id="descripcion" value="{{ old('descripcion',$producto->descripcion)}}" name="descripcion">
                  </div>

                  <div class="mb-3">
                      <label for="cantidad" class="form-label">Cantidad</label>
                      <input type="text" class="form-control" id="cantidad" value="{{ old('cantidad',$producto->cantidad)}}" name="cantidad">
                  </div>

                  <div class="mb-3">
                    <label for="valorCompra" class="form-label">Precio Compra</label>
                    <input type="text" class="form-control" id="valorCompra" value="{{ old('valorCompra',$producto->valorCompra) }}" name="valorCompra">
                </div>

                <div class="mb-3">
                    <label for="valorVenta" class="form-label">Precio Venta</label>
                    <input type="text" class="form-control" id="valorVenta" value="{{ old('valorVenta',$producto->valorVenta) }}" name="valorVenta">
                </div>

                  <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="area_select">

                        <option value="" selected>SELECCIONE EL DEPARTAMENTO AL PERTENECE</option>

                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">
                                {{ $area->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-file-download"></i> ACTUALIZAR</button>
                <a class="btn btn-danger" href="{{ route('productos') }}"><i class="fas fa-ban"></i> CANCELAR</a>
            </form>
        </div>
    </div>
</x-app-layout>
