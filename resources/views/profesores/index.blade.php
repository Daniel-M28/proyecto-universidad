@extends('layouts.app')

@section('title', 'Lista de profesores')

@section('content')
    <div class="container">
        <h4>Lista de profesores</h4>
        <a href="{{ route('profesores.create') }}" class="btn btn-primary">Agregar profesor</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Materia Asignada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->id }}</td>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->correo_electronico }}</td>
                    <td>{{ $profesor->telefono }}</td>
                    <td>
                        @if($profesor->materia)
                            {{ $profesor->materia->nombre }}
                        @else
                            No asignada
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('profesores.show', $profesor->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST" style="display:inline;">
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
