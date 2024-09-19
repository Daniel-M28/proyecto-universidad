@extends('layouts.app')

@section('title', 'Editar Materia')

@section('content')

@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


    <div class="container">
        <h4>Editar Materia</h4>

        <form action="{{ route('materias.update', $materia->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $materia->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="periodos" class="form-label">Correo Electrónico</label>
                <input type="text" name="periodos" id="periodos" class="form-control" value="{{ $materia->periodos}}" required>
            </div>
           
            <div class="mb-3">
    <label for="profesor_id" class="form-label">Profesor</label>
    <select name="profesor_id" id="profesor_id" class="form-control" required>
        <option value="">Seleccionar Profesor</option>
        @foreach($profesores as $profesor)
            <option value="{{ $profesor->id }}" {{ $materia->profesor_id == $profesor->id ? 'selected' : '' }}>
                {{ $profesor->nombre }}
            </option>
        @endforeach
    </select>
</div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </form>
    </div>
@endsection
