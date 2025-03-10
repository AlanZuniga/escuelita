<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all(); //variable mensaje -> modelo mensajes -> todo
        //dd($alumnos);
        return view('lista-alumnos', ['alumnos'=> $alumnos]); //crear un arreglo ['mensajes'=> $mensajes]
    }
       
    /**
     * Show the form for creating a new resource.
     */
    public function create ()
    {
        return view('contacto');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //
                //dd( $request->all(), $request->correo );
        // dd('si llego a esta ruta');

        // Validar formulario
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|unique:alumnos',
            'Fecha_Nacimiento' => 'required|date',
        ]);

        // Guardar a DB
        $alumno = new Alumno();
        //$alumno->ID = $request->ID;
        $alumno->Nombre = $request->Nombre;
        $alumno->Correo = $request->Correo;
        $alumno->Fecha_Nacimiento = $request->Fecha_Nacimiento;
        //guardar en la basse de datos 
        $alumno->save();

        // Redirigir
        return redirect('/alumnos');

    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
