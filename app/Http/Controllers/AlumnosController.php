<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Materia;
class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       // Obtener todos los alumnos
       $alumnos = Alumno::all();

       // Pasar los datos a la vista
       return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // Obtener todas las materias
         $materias = Materia::all();

         return view('alumnos.create', compact('materias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255|unique:alumnos',
            'telefono' => 'required|numeric|digits_between:7,10',
            'materias' => 'array', // Asegurarse de que el campo 'materias' sea un array
            'materias.*' => 'exists:materias,id' // Asegurarse de que cada materia exista en la tabla de materias
        ]);

        // Crear el alumno
        $alumno = Alumno::create($request->only('nombre', 'correo_electronico', 'telefono'));

        // Asignar materias al alumno
        if ($request->has('materias')) {
            $alumno->materias()->attach($request->input('materias'));
        }

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       // Obtener el alumno con sus materias
       $alumno = Alumno::with('materias')->findOrFail($id);
       return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
         // Obtener el alumno y las materias disponibles
         $alumno = Alumno::with('materias')->findOrFail($id);
         $materias = Materia::all();
         return view('alumnos.edit', compact('alumno', 'materias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'materias' => 'array', // Asegurarse de que el campo 'materias' sea un array
            'materias.*' => 'exists:materias,id' // Asegurarse de que cada materia exista en la tabla de materias
        ]);

        // Encontrar el alumno
        $alumno = Alumno::findOrFail($id);

        // Actualizar el alumno
        $alumno->update($request->only('nombre', 'correo_electronico', 'telefono'));

        // Sincronizar las materias del alumno
        $alumno->materias()->sync($request->input('materias', []));

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado con éxito.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado exitosamente.');
    }
}
