<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class ArchivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('archivos')->insert([
            'idPlano' => 1, 
            'nombre' => 'Plano_A1_dwg',
            'tipo' => 'DWG',
            'ruta' => 'archivos/proyectos/plano_a1.dwg',
        ]);

        DB::table('archivos')->insert([
            'idPlano' => 2, 
            'nombre' => 'Plano_B1_pdf',
            'tipo' => 'PDF',
            'ruta' => 'archivos/proyectos/plano_b1.pdf',
        ]);
    }
}
