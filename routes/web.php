<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ProfesoresController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    
});


Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/index', function () {
    return view('index');
})->name('index');

Route::post('/contacto', [App\Http\Controllers\ContactoController::class, 'store'])->name('contacto.store');




Route::resource('alumnos',  App\Http\Controllers\AlumnosController::class)->middleware('auth');



Route::resource ('materias', App\Http\Controllers\MateriasController::class)-> middleware('auth');

Route::resource ('profesores', App\Http\Controllers\ProfesoresController::class)-> middleware('auth');













require __DIR__.'/auth.php';
