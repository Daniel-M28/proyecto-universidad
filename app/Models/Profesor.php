<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores'; // Especifica el nombre correcto de la tabla

    protected $fillable = ['nombre', 'correo_electronico', 'telefono'];

    public function materia()
    {
        return $this->hasOne(Materia::class, 'profesor_id', 'id');
    }
}

