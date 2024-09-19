@extends('layouts.app')

@section('title', 'Editar profesor')

@section('content')
    <div class="container">
        <h1>Editar profesor</h1>

        <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $profesor->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" value="{{ $profesor->correo_electronico }}" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $profesor->telefono }}" required>
            </div>

            <div class="mb-3">
                <label for="materia_id" class="form-label">Materia</label>
                <select name="materia_id" id="materia_id" class="form-control">
                    <option value="">Ninguna</option>
                    @foreach($materias as $materia)
                        <option value="{{ $materia->id }}" {{$profesor->materia && $profesor->materia->id == $materia->id ? 'selected' : '' }}>
                            {{ $materia->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('profesores.index') }}" class="btn btn-secondary">Volver a la lista</a>
        </form>
    </div>
@endsection
