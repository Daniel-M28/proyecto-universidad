<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
   protected $fillable= [
'nombre',
'correo_electronico',
'mensaje'

   ];
}
