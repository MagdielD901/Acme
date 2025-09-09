<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class ArquitectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('arquitectos')->insert([
            'nombre' => 'Pedro García',
            'correo' => 'pedro.garcia@gmail.com',
            'telefono' => '555-1000',
            'especialidad' => 'Residencial',
        ]);

        DB::table('arquitectos')->insert([
            'nombre' => 'Laura Martínez',
            'correo' => 'laura.martinez@gmail.com',
            'telefono' => '555-2000',
            'especialidad' => 'Comercial',
        ]);
    }
}
