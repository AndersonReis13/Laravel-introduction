<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'João Silva',
            'email' => 'joao@example.com',
            'password' => Hash::make('senha123'),
            'tipo' => 'cliente',
            'telefone' => '(11) 91234-5678',
            'foto_perfil' => 'joao.jpg',
            'email_verified_at' => now(),
            'remember_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
