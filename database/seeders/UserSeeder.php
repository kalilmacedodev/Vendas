<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nome' => 'Kalil Macedo',
            'username' => 'kalilmacedo',
            'email' => 'kalil.pacheco.zaidan@gmail.com',
            'password' => Hash::make('123'),
            'ativo'=> 1,
        ]);

        User::create([
            'nome' => 'Jayana P',
            'username' => '	jayypinhe',
            'email' => 'jayyyypine@gmail.com',
            'password' => Hash::make('123'),
            'ativo'=> 1,
        ]);
    }
}
