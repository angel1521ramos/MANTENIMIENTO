<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipo>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'departamento_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'inventario' => $this->faker->numberBetween($min = 1241, $max = 9999),
            'marca' => $this->faker->randomElement($array = array ('HP','LENOVO','BENQ','SAMSUNG','ACER')),
            'tipo' => $this->faker->randomElement($array = array ('COMPUTADORA','IMPRESORA','REGULADOR'))
        ];
    }
}
