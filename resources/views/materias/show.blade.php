@extends('layouts.app')

@section('title', 'Ver Materia')

@section('content')
    <div class="container">
        <h4>Detalles de la materia</h4>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $materia->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $materia->nombre }}</td>
            </tr>
            <tr>
                <th>Periodos</th>
                <td>{{ $materia->periodos }}</td>
            </tr>
            <tr>
                <th>Profesor</th>
                <td>{{ $materia->profesor->nombre }}</td>
            </tr>
            <tr>
            </tr>
            <div >
            <strong>Alumnos Asignados:</strong>
            <ul>
                @foreach($materia->alumnos as $alumno)
                    <li>{{ $alumno->nombre }}</li>
                @endforeach
            </ul>
        </div>

        </table>

        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
@endsection
