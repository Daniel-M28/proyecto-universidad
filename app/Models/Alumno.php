<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  // Agrega los campos que quieres permitir para asignación masiva
  protected $fillable = [
    'nombre',
    'correo_electronico',
    'telefono',
];

public function materias()
    {
        return $this->belongsToMany(Materia::class, 'alumno_materia');
    }



}
