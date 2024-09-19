@extends('layouts.app')

@section('title', 'Lista de Alumnos')

@section('content')
    <div class="container">
        <h4>Lista de Alumnos</h4>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Agregar Alumno</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Materias</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->correo_electronico }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>
                        @if($alumno->materias->isEmpty())
                            No asignadas
                        @else
                            @foreach ($alumno->materias as $materia)
                                {{ $materia->nombre }}@if (!$loop->last), @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
