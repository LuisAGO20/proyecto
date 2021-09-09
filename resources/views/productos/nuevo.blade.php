<x-app-layout>
    <div class="card">
        <h2><strong>Complete el Formulario para registrar un nuevo Producto</strong></h2>
        <div class="card-body">

            <form method="POST" action="{{ route('guardarProducto') }}">

                @csrf

                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre del Producto</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Ej. Cocina Indurama</div>
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca del Producto</label>
                    <input type="text" class="form-control" id="marca" value="{{ old('marca') }}" name="marca">
                </div>

                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción del Producto</label>
                  <input type="text" class="form-control" id="descripcion" value="{{ old('descripcion') }}" name="descripcion">
                </div>

                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" value="{{ old('cantidad') }}" name="cantidad">
                </div>

                <div class="mb-3">
                    <label for="valorCompra" class="form-label">Precio Compra</label>
                    <input type="text" class="form-control" id="valorCompra" value="{{ old('valorCompra') }}" name="valorCompra">
                </div>

                <div class="mb-3">
                    <label for="valorVenta" class="form-label">Precio Venta</label>
                    <input type="text" class="form-control" id="valorVenta" value="{{ old('valorVenta') }}" name="valorVenta">
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

                <button type="submit" class="btn btn-success"><i class="fas fa-file-download"></i> Guardar</button>
                <a class="btn btn-danger" href="{{ route('productos') }}"><i class="fas fa-ban"></i> Cancelar</a>
              </form>
        </div>
    </div>
</x-app-layout>
