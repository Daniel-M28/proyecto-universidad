<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
   // Agrega los campos que requieren asignación masiva
  protected $fillable = [
    'nombre',
    'periodos',
    'profesor_id'
];


public function alumnos()
{
    return $this->belongsToMany(Alumno::class, 'alumno_materia');
}

public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_id', 'id');
    }



}
