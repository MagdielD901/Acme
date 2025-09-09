<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zonas')->insert([
            'nombre_zona' => 'Zona Norte',
            'descripcion' => 'Zona ubicada en el norte de la ciudad, ideal para residencias.',
        ]);

        DB::table('zonas')->insert([
            'nombre_zona' => 'Zona Sur',
            'descripcion' => 'Zona al sur de la ciudad, con múltiples instalaciones comerciales.',
        ]);

        DB::table('zonas')->insert([
            'nombre_zona' => 'Zona Centro',
            'descripcion' => 'Zona central de la ciudad, con accesibilidad a todo tipo de servicios.',
        ]);
    }
}
