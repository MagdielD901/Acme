<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class ProyectossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            'nombre' => 'Proyecto A',
            'descripcion' => 'Descripción del Proyecto A',
            'idCliente' => 1, // Suponiendo que el cliente con id 1 existe
            'fecha_inicio' => '2025-01-01',
            'fecha_entrega' => '2025-06-01',
        ]);

        DB::table('proyectos')->insert([
            'nombre' => 'Proyecto B',
            'descripcion' => 'Descripción del Proyecto B',
            'idCliente' => 2, // Suponiendo que el cliente con id 2 existe
            'fecha_inicio' => '2025-02-01',
            'fecha_entrega' => '2025-07-01',
        ]);
    }
}
