<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Alumno;
use App\Models\Profesor;
class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { //obtiene todas las materias de la bd
        $materias = Materia::all();

        return view ('materias.index', compact('materias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $alumnos = Alumno::all();
    $profesores = Profesor::all();
    return view('materias.create', compact('alumnos', 'profesores'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate([
        'nombre' => 'required|string|max:255',
        'periodos' => 'required|integer|min:1|max:10',
        'alumnos' => 'array', // Asegurarse de que el campo 'alumnos' sea un array
        'alumnos.*' => 'exists:alumnos,id' // Asegurarse de que cada alumno exista en la tabla de materias
     ]);
    

    // Crear la materia
    $materia = Materia::create($request->only('nombre', 'periodos'));

    // Asignar alumnos a las materias
    if ($request->has('alumnos')) {
        $materia->alumnos()->attach($request->input('alumnos'));
    }

    return redirect()->route('materias.index')->with('success', 'Materia creado con éxito.');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       // Obtener la materia con alumno
       $materia = Materia::with('alumnos')->findOrFail($id);
       return view('materias.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         // Obtener el alumno y las materias disponibles
         $materia = Materia::with('alumnos')->findOrFail($id);
         $alumnos = Alumno::all();
         $profesores = Profesor::all(); 
         return view('materias.edit', compact('materia', 'alumnos', 'profesores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'periodos' => 'required|integer|min:1|max:10',
            'alumnos' => 'array',
            'alumnos.*' => 'exists:alumnos,id',
            'nombre' => 'required|string|max:255',
            'periodos' => 'required|integer',
            'profesor_id' => 'nullable|exists:profesores,id'
        ]);
    
        if ($request->input('profesor_id')) {
            $existingMateria = Materia::where('profesor_id', $request->input('profesor_id'))->first();
            if ($existingMateria && $existingMateria->id !== $materia->id) {
                return redirect()->back()->withErrors(['profesor_id' => 'El profesor ya está asignado a otra materia.']);
            }
        }
        // Actualizar la materia
        $materia->update($request->only('nombre', 'periodos'));
        $materia->update($request->only('nombre', 'periodos', 'profesor_id'));
        // Sincronizar los alumnos de la materia
        $materia->alumnos()->sync($request->input('alumnos', []));
        $materia->alumnos()->sync($request->input('profesores', []));
        return redirect()->route('materias.index')->with('success', 'Materia actualizada con éxito.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index')->with('success', 'Materia eliminada exitosamente.');
    }
}
