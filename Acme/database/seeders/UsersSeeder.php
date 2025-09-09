<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;


use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Magdiel Dominguez',
            'email' => 'mag@gmail.com',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'name' => 'Jesus',
            'email' => 'magd@gmail.com',
            'password' => Hash::make('456'),
        ]);
    }
}