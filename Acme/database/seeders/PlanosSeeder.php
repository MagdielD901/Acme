<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert([
            'idProyecto' => 1, // Asegúrate de que el idProyecto 1 existe
            'nombre' => 'Plano A1',
            'descripcion' => 'Plano detallado del Proyecto A',
            'fecha_creacion' => '2025-01-01',
            'hoja' => 1,
        ]);

        DB::table('planos')->insert([
            'idProyecto' => 2, // Asegúrate de que el idProyecto 2 existe
            'nombre' => 'Plano B1',
            'descripcion' => 'Plano detallado del Proyecto B',
            'fecha_creacion' => '2025-02-01',
            'hoja' => 2,
        ]);
    }
}
