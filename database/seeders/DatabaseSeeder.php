<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/**use \App\Models\Departamento;
use \App\Models\Equipo;
use \App\Models\Tecnico;
use \App\Models\Codigo;
use \App\Models\Solicitud;*/
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory(10)->create();
        Departamento::factory(8)->create();
        Equipo::factory(20)->create();
        Tecnico::factory(3)->create();
        Solicitud::factory(20)->create();*/

        User::create([
            'name' => 'Jose Angel Ramos Martinez',
            'email' => 'angel1521ramos@gmail.com',
            'rol' => 'administrador',
<<<<<<< HEAD
            'password' => bcrypt('Mdsti2k22#')
        ]);
        User::create([
            'name' => 'Sergio Fernandez Ferreira',
            'email' => 'soporte@minatitlan.gob.mx',
            'rol' => 'administrador',
            'password' => bcrypt('Dsti2k22#')
        ]);
        User::create([
            'name' => 'Carmen Medel Palma',
            'email' => 'carmenmedel@minatitlan.gob.mx',
            'rol' => 'administrador',
            'password' => bcrypt('Prm2k22#')
=======
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'gaer',
            'email' => 'gaer1521ramos@gmail.com',
            'rol' => 'departamento',
            'password' => bcrypt('123456')
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
        ]);
    }
}
