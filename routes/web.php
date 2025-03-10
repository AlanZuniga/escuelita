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
Route::get('/alumnos',[MensajeController::class, 'index']);
Route::get('/contacto',[MensajeController::class, 'create']);
Route::post('/crear-contacto',[MensajeController::class, 'store']);

Route::resource('alumnos',MensajeController::class);