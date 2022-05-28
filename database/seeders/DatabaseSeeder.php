<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Departamento;
use \App\Models\Equipo;
use \App\Models\Tecnico;
use \App\Models\Solicitud;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        Tecnico::factory(3)->create();
        //Solicitud::factory(20)->create();

        User::create([
            'name' => 'Angel',
            'email' => 'angel1521ramos@gmail.com',
            'rol' => 'administrador',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'gaer',
            'email' => 'gaer1521ramos@gmail.com',
            'rol' => 'departamento',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'fernando',
            'email' => 'fernando1521ramos@gmail.com',
            'rol' => 'tecnico',
            'password' => Hash::make('123456')
        ]);
    }
}
