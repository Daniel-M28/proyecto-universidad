<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Materia;
class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
       // Obtener todos los profesores
       $profesores = Profesor::all();

       // Pasar los datos a la vista
       return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // Obtener todas las materias
         $materias = Materia::all();

         return view('profesores.create', compact('materias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255|unique:profesores',
            'telefono' => 'required|numeric|digits_between:7,10',
            'materia_id' => 'nullable|exists:materias,id', 
        ]);

        // Verificar si la materia ya está asignada a otro profesor
    if ($request->input('materia_id')) {
        $existingProfesor = Profesor::where('materia_id', $request->input('materia_id'))->first();
        if ($existingProfesor) {
            return redirect()->back()->withErrors(['materia_id' => 'La materia ya está asignada a otro profesor.']);
        }
    }
        $profesor = Profesor::create($request->only('nombre', 'correo_electronico', 'telefono'));

        // Asignar materias si se proporcionan
        if ($request->has('materias')) {
            $profesor->materias()->sync($request->input('materias'));
        }

        return redirect()->route('profesores.index')->with('success', 'Profesor creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $profesor = Profesor::with('materia')->findOrFail($id);
        return view('profesores.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
         // Obtener el profesor y las materias disponibles
         $profesor = Profesor::with('materia')->findOrFail($id);
         $materias = Materia::all();
         return view('profesores.edit', compact('profesor', 'materias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo_electronico' => 'required|email|max:255',
            'telefono' => 'required|numeric|digits_between:7,10',
            'materia_id' => 'required|exists:materias,id' // Asegurarse de que la materia exista
        ]);

        // Encontrar el profesor
        $profesor = Profesor::findOrFail($id);

        // Actualizar el profesor
        $profesor->update($request->only('nombre', 'correo_electronico', 'telefono'));

        // Actualizar la materia del profesor
        $materia = Materia::find($request->input('materia_id'));
        $materia->profesor_id = $profesor->id;
        $materia->save();

        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado con éxito.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
{
    // Eliminar la materia asociada al profesor
    $materia = Materia::where('profesor_id', $profesor->id)->first();
    
    if ($materia) {
        $materia->profesor_id = null;
        $materia->save();
    }

    try {
        // Intentar eliminar el profesor
        $profesor->delete();

        // Verificar si el profesor fue eliminado
        if (Profesor::find($profesor->id)) {
            return back()->with('error', 'El profesor no pudo ser eliminado.');
        }

        // Redirigir con mensaje de éxito
        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado exitosamente.');
    } catch (\Exception $e) {
        return back()->with('error', 'Error al eliminar el profesor: ' . $e->getMessage());
    }
}

}
