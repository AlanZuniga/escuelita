<?php

namespace Tests\Feature;

use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlumnoControllerTest extends TestCase
{
    //use RefreshDatabase;
    
     // A basic feature test example.
     


     public function test_muestra_listado_alumnos(): void
     {
         // $response = $this->get(route('alumnos.index'));
         //Alumno::factory(2)->create(); //crear dos alumnos
        $response = $this->get('/alumnos');

        $response->assertSee('Alumnos Recibidos');
        $response->assertStatus(200);
     }
 
    
     public function test_muestra_formulario_crear_alumno(): void
     {
        $response = $this->get('/alumnos/create');

        $response->assertSee('Registrar Nuevo Alumno')
            ->assertSeeHtml('name="Nombre"', false);
 
        $response->assertStatus(200);
     }
 
     
     public function test_crear_nuevo_alumno(): void
     {
         //Dado
         $alumno = Alumno::factory()->make();
 
         //Acción
         $response = $this->post('/alumnos', $alumno->toArray());
         
         //Expectativa
         $this->assertDatabaseHas('alumnos', $alumno->toArray());
         //$response->assertStatus(302);
         $response->assertRedirect('/alumnos');
     }
 
     
     public function test_muestra_formulario_editar_alumno(): void
     {
         //Dado
         $alumno = Alumno::factory()->create();
 
         //Acción
         // $response = $this->get("/alumnos/{$alumno->id}/edit");
         $response = $this->get(route('alumnos.edit', $alumno->id));
 
         //Expectativa
         $response->assertSee('Editar Alumno')
             ->assertSeeHtml($alumno->Nombre)
             ->assertSeeHtml($alumno->Correo)
             ->assertSeeHtml($alumno->Fecha_Nacimiento)
             ->assertSeeHtml($alumno->Ciudad)
             ->assertStatus(200);
     }
     //------------------------------------------------------------------
     
    public function test_muestra_detalle_alumno(): void
    {
        $alumno = Alumno::factory()->create();

        $response = $this->get(route('alumnos.show', $alumno->id));

        $response->assertSee('Detalle del Alumno')
            ->assertSeeHtml($alumno->Nombre)
            ->assertSeeHtml($alumno->Correo)
            ->assertSeeHtml($alumno->Fecha_Nacimiento)
            ->assertSeeHtml($alumno->Ciudad)
            ->assertStatus(200);
    }

   
    public function test_editar_alumno(): void
    {
        $alumno = Alumno::factory()->create();
        $alumnoEditado = Alumno::factory()->make();

        $response = $this->put(route('alumnos.update', $alumno->id), $alumnoEditado->toArray());

        $this->assertDatabaseHas('alumnos', $alumnoEditado->toArray());
        $response->assertRedirect(route('alumnos.show', $alumno->id));
    }

    
    public function test_eliminar_alumno(): void
    {
        $alumno = Alumno::factory()->create();

        $response = $this->delete(route('alumnos.destroy', $alumno->id));

        $this->assertDatabaseMissing('alumnos', $alumno->toArray());
        $response->assertRedirect('/alumnos');
    }
}
