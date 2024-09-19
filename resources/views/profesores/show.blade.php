@extends('layouts.app')

@section('title', 'Ver profesor')

@section('content')
    <div class="container">
        <h1>Detalles del profesor</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $profesor->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $profesor->nombre }}</td>
            </tr>
            <tr>
                <th>Correo Electrónico</th>
                <td>{{ $profesor->correo_electronico }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $profesor->telefono }}</td>
            </tr>
        </table>

        <div>
            <strong>Materia Asignada:</strong>
            @if($profesor->materia)
                <ul>
                    <li>{{ $profesor->materia->nombre }}</li>
                </ul>
            @else
                <p>No asignada</p>
            @endif
        </div>


        <a href="{{ route('profesores.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
@endsection
