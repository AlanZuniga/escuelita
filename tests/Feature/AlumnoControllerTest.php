<?php

namespace Tests\Feature;

use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlumnoControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */


     public function test_muestra_listado_alumnos(): void
     {
         // $response = $this->get(route('alumnos.index'));
         //Alumno::factory(2)->create(); //crear dos alumnos
         $response = $this->get('/alumnos');

         $response->assertSee('Listado de Alumnos');
         $response->assertStatus(200);
     }
 
     /** @test */
     public function muestra_formulario_crear_alumno(): void
     {
         $response = $this->get('/alumnos/create');

         $response->assertSee('Crear Alumno')
             ->assertSeeHtml('name="Nombre"', false);
 
         $response->assertStatus(200);
     }
 
     /** @test */
     public function crear_nuevo_alumno(): void
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
 
     /** @test */
     public function muestra_formulario_editar_alumno(): void
     {
         //Dado
         $alumno = Alumno::factory()->create();
 
         //Acción
         // $response = $this->get("/alumnos/{$alumno->id}/edit");
         $response = $this->get(route('alumnos.edit', $alumno->id));
 
         //Expectativa
         $response->assertSee('Editar alumno')
             ->assertSeeHtml($alumno->Nombre)
             ->assertSeeHtml($alumno->Correo)
             ->assertSeeHtml($alumno->Fecha_Nacimiento)
             ->assertSeeHtml($alumno->Ciudad)
             ->assertStatus(200);
     }
     //----------------------------------------------------------------------------------
      /** @test */
    public function muestra_detalle_alumno(): void
    {
        $alumno = Alumno::factory()->create();

        $response = $this->get(route('alumnos.show', $alumno->id));

        $response->assertSee('Detalle alumno')
            ->assertSeeHtml($alumno->Nombre)
            ->assertSeeHtml($alumno->Correo)
            ->assertSeeHtml($alumno->Fecha_Nacimiento)
            ->assertSeeHtml($alumno->Ciudad)
            ->assertStatus(200);
    }

    /** @test */
    public function editar_alumno(): void
    {
        $alumno = Alumno::factory()->create();
        $alumnoEditado = Alumno::factory()->make();

        $response = $this->put(route('alumnos.update', $alumno->id), $alumnoEditado->toArray());

        $this->assertDatabaseHas('alumnos', $alumnoEditado->toArray());
        $response->assertRedirect(route('alumnos.show', $alumno->id));
    }

    /** @test */
    public function eliminar_alumno(): void
    {
        $alumno = Alumno::factory()->create();

        $response = $this->delete(route('alumnos.destroy', $alumno->id));

        $this->assertDatabaseMissing('alumnos', $alumno->toArray());
        $response->assertRedirect('/alumnos');
    }
}
