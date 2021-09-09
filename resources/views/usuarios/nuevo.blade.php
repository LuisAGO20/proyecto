<x-app-layout>
    <br>
        <h2><strong>Formulario para Ingresar nuevo Usuario</strong></h2>
    <br>
    <div class="card">
        <div class="card-body">

            <form method="POST" action="{{ route('guardarCliente') }}">

                @csrf

                <div class="mb-3">
                  <label for="nombres" class="form-label"><strong>Nombres</strong></label>
                  <input type="text" class="form-control" id="nombres" name="nombres" value="{{old('nombres')}}" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Ej. Uriel Sebastian</div>
                </div>

                <div class="mb-3">
                  <label for="apellidos" class="form-label"><strong>Apellidos</strong></label>
                  <input type="text" class="form-control" id="apellidos" value="{{ old('apellidos') }}" name="apellidos">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><strong>Correo Electrónico</strong></label>
                    <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email">
                </div>

                <div class="mb-3">
                    <label for="cedula" class="form-label"><strong>Cédula</strong></label>
                    <input type="text" class="form-control" id="cedula" value="{{ old('cedula') }}" name="cedula">
                </div>

                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Guardar</button>
                <a class="btn btn-danger" href="{{ route('clientes') }}"><i class="fas fa-ban"></i>Cancelar</a>

            </form>
        </div>
    </div>
</x-app-layout>
