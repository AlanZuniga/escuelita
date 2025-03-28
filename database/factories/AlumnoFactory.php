<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->name(),
            'Correo' => $this->faker->unique()->safeEmail(),
            'Fecha_Nacimiento' => $this->faker->date(),
            'Ciudad' => $this->faker->city(),
            //
        ];
    }
}
