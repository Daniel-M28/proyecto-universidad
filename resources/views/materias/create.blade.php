@extends('layouts.app')

@section('title', 'Agregar Materia')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h4>Agregar Materia</h4>

    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="periodos" class="form-label">Periodos</label>
            <input type="text" name="periodos" id="periodos" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alumnos" class="form-label">Alumnos</label>
            <select name="alumnos[]" id="alumnos" class="form-control" multiple>
                @foreach($alumnos as $alumno)
                    <option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="profesor_id" class="form-label">Profesor</label>
            <select name="profesor_id" id="profesor_id" class="form-control" required>
                <option value="">Seleccionar Profesor</option>
                @foreach($profesores as $profesor)
                    <option value="{{ $profesor->id }}">
                        {{ $profesor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </form>
</div>
@endsection
