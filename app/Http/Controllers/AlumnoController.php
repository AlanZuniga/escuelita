<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        return view('lista-alumno', [
            'alumnos' => Alumno::all()
        ]);  
    }
       
    public function create (){
        return view('contacto');
    }

    public function store(Request $request)
    {
        //dd($request->all());
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
        //dd($alumno);
        $alumno->save();
        
        // Redirigir
        return redirect('/alumnos');
        
    }

//-----------------------------------------------------------------
    public function show(Alumno $alumno)
    {
        return view('alumnos.show-alumno', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit-alumno', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|unique:alumnos',
            'Fecha_Nacimiento' => 'required|date',
        ]);

        $alumno->nombre = $request->nombre;
        $alumno->correo = $request->correo;
        $alumno->Fecha_Nacimiento = $request->Fecha_Nacimiento;
        $alumno->save();

        return redirect()->route('alumnos.show', $alumno);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
