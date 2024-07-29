<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Rafael Fonseca',
            'contato' => '989899999',
            // 'segundo_contato',
            'endereco' => 'Renascença',
            'user_id' => 1,
        ]);

        Cliente::create([
            'nome' => 'Adonias',
            'contato' => '989899999',
            // 'segundo_contato',
            'endereco' => 'Calhau',
            'user_id' => 1,
        ]);

        Cliente::create([
            'nome' => 'Pedro Antônio',
            'contato' => '989899999',
            // 'segundo_contato',
            'endereco' => 'Renascença',
            'user_id' => 1,
        ]);
    }
}
