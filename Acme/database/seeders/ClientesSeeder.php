<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertamos 2 registros de ejemplo
        DB::table('clientes')->insert([
            'nombre' => 'Carlos Pérez',
            'direccion' => 'Calle Falsa 123',
            'telefono' => '555-1234',
        ]);

        DB::table('clientes')->insert([
            'nombre' => 'María Gómez',
            'direccion' => 'Avenida Real 456',
            'telefono' => '555-5678',
        ]);
    }
}
