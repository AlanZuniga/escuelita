<?php
use App\Http\Controllers\AlumnoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('landing');
});
//Route::get('/alumnos',[AlumnoController::class, 'index']);
//Route::get('/contacto',[AlumnoController::class, 'create']);
//Route::post('/crear-contacto',[AlumnoController::class, 'store']);

Route::resource('alumnos',AlumnoController::class);