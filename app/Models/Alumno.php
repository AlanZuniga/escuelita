<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //datos de prueba
    protected $fillable = [
       'Nombre', 'Correo', 'Fecha_Nacimiento', 'Ciudad'];
}
