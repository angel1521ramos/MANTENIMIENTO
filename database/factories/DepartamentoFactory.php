<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departamento>
 */
class DepartamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'identificador' => $this->faker->currencyCode,
            'nombre' => $this->faker->randomElement($array = array ('SISTEMAS','CATASTRO','TESORERIA','PRESIDENCIA','PATRIMONIO','CAEV','OBRAS PUBLICAS','RECURSOS HUMANOS')),
            'responsable' => $this->faker->name,
            'cargo_responsable' => $this->faker->randomElement($array = array ('DIRECTOR/A','JEFE/A')),
            'direccion' => $this->faker->randomElement($array = array ('Av. Miguel Hidalgo 107, Zona Centro')),
            'telefono' => $this->faker->tollFreePhoneNumber,
            'correo' => $this->faker->regexify('[A-Z.+-]+@minatitlan+gob+mx'),
            'password' => '123456'
        ];
    }
}
