@extends('layouts.app')

@section('title', 'Ver Alumno')

@section('content')
    <div class="container">
        <h1>Detalles del Alumno</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $alumno->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $alumno->nombre }}</td>
            </tr>
            <tr>
                <th>Correo Electrónico</th>
                <td>{{ $alumno->correo_electronico }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $alumno->telefono }}</td>
            </tr>


            <div >
            <strong>Materias Asignadas:</strong>
            <ul>
                @foreach($alumno->materias as $materia)
                    <li>{{ $materia->nombre }}</li>
                @endforeach
            </ul>
        </div>

        </table>

        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
@endsection
