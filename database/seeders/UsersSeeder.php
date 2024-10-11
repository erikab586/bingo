<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'nombre' => 'Juana',
            'apellido' => 'Perez',
            'nacimiento' => '28-02-1989',
            'telefono' => '+58411090185',
            'direccion' => 'Sierr Parima, Ciudad Guayana, Venezuela', 
            'email' => 'erikab644@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Bingoline2024.'),
            'rol' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
