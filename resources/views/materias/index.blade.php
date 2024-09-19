@extends('layouts.app')

@section('title', 'Lista de Materias')

@section('content')
    <div class="container">
        <h4>Lista de Materias</h4>
        <a href="{{ route('materias.create') }}" class="btn btn-primary">Agregar Materia</a>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Periodos</th>
                    <th>Profesor</th>
                    <th>Alumnos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->periodos }}</td>
                    <td>
                       @if($materia->profesor)
                         {{ $materia->profesor->nombre }}
                      @else
                         No asignado
                      @endif
                    </td>
                    <td>
                        @if($materia->alumnos->isEmpty())
                            No asignados
                        @else
                            @foreach ($materia->alumnos as $alumno)
                                {{ $alumno->nombre }}@if (!$loop->last), @endif
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('materias.show', $materia->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline;">
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