<x-app-layout>
    <br>
    <div class="card text-center">
        <h2><span class="badge bg-secondary">¿Confirmar la Eliminación del Departamento?</span></h2>
        <br>
        <h2>{{ $area->nombre }}</h2>
        <br>
        <br>
        <img src="http://www.clker.com/cliparts/L/M/S/F/S/n/boton-eliminar-rojo.svg.hi.png" class="rounded mx-auto d-block" alt="..." height="172" width="600">
        <br>
        <a href="{{ route('confirmarEliminarArea',$area->id) }}" class="btn btn-success"><i class="fas fa-check-circle"></i> Confirmar</a>
        <a href="{{ route('areas') }}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
    </div>
</x-app-layout>
