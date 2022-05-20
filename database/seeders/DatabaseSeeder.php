<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Departamento;
use \App\Models\Equipo;
use \App\Models\Solicitud;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Departamento::factory(8)->create();
        Equipo::factory(20)->create();
        Solicitud::factory(20)->create();
    }
}
