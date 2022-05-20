<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'equipo_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'departamento_id' => $this->faker->numberBetween($min = 1, $max = 8),
            'identificador' => $this->faker->numberBetween($min = 1241, $max = 9999),
            'observacion' => $this->faker->randomElement($array = array ('NO FUNCIONA','ATASCADO', 'SE ROMPIO', 'EXPIDE UN SONIDO RARO')),
            'tipo' => $this->faker->randomElement($array = array ('SOPORTE','MANTENIMIENTO')),
            'estatus' => $this->faker->randomElement($array = array ('PENDIENTE','PROCESO','FINALIZADO'))
        ];
    }
}
