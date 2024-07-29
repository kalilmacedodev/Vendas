<?php

namespace Database\Seeders;

use App\Models\TipoSaida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSaidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoSaida::create([
            'descricao' => 'Venda',
        ]);

        TipoSaida::create([
            'descricao' => 'Presente',
        ]);

        TipoSaida::create([
            'descricao' => 'Descarte por Validade',
        ]);

        TipoSaida::create([
            'descricao' => 'Descarte por Outrem',
        ]);
    }
}
