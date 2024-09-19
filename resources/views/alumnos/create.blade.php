@extends('layouts.app')

@section('title', 'Agregar Alumno')

@section('content')
    <div class="container">
        <h1>Agregar Alumno</h1>

        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="materias" class="form-label">Materias</label>
                <select name="materias[]" id="materias" class="form-control" multiple>
                    @foreach($materias as $materia)
                        <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </form>
    </div>
@endsection
