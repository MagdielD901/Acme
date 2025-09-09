<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class RevisionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('revisiones')->insert([
            'idPlano' => 1, 
            'revisado_por' => 1, 
            'idArquitecto' => 1, 
            'fecha_revision' => '2025-01-15',
            'comentarios' => 'Revisión inicial del plano A1. Se necesitan ajustes en la escala.',
        ]);

        DB::table('revisiones')->insert([
            'idPlano' => 2, 
            'revisado_por' => 2, 
            'idArquitecto' => 2, 
            'fecha_revision' => '2025-02-20',
            'comentarios' => 'Revisión final del plano B1. Todo en orden, listo para aprobación.',
        ]);
    }
}
