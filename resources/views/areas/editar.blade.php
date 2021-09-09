<x-app-layout>
    <br>
        <h2><span class="badge bg-secondary">Complete el formulario para actualizar el Departamento {{$area->nombre}}</span></h2>
    <br>
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('actualizarArea') }}">

                @csrf

                <input type="hidden" name="id" value="{{$area->id}}" />

                <div class="mb-3">
                    <label for="encargado" class="form-label">Nombre Encargado</label>
                    <input type="text" class="form-control" id="encargado" name="encargado" value="{{old('encargado',$area->encargado)}}" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ej. Sr Carlos Sevilla</div>
                  </div>

                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Departamento</label>
                    <input type="text" class="form-control" id="nombre" value="{{ old('nombre',$area->nombre) }}" name="nombre">
                  </div>

                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <input type="text" class="form-control" id="descripcion" value="{{ old('descripcion',$area->descripcion) }}" name="descripcion">
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-file-download"></i> ACTUALIZAR</button>
                <a class="btn btn-danger" href="{{ route('areas') }}"><i class="fas fa-ban"></i> CANCELAR</a>

            </form>

        </div>
    </div>
</x-app-layout>
