<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{

 public function store(Request $request)
{
 $request->validate([
'nombre' =>'required|string|max:50',
'correo_electronico' => 'required|email|max:50',
'mensaje' => 'required|string|max:500',

 ]);

 $contacto = Contacto::create($request->only('nombre', 'correo_electronico', 'mensaje'));

 return redirect()->back()->with('success', '¡Mensaje enviado correctamente!');

}

}

