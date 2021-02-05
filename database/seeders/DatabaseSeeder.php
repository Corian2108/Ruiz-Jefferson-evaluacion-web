<?php

namespace Database\Seeders;

use App\Models\Configuracion;
use App\Models\Rol;
use App\Models\Usuario;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        Configuracion::factory()->count(50)->create();
        Usuario::factory()->count(50)->hasConfiguracion(1)->create();
        Rol::factory()->count(10)->create();

    }
}