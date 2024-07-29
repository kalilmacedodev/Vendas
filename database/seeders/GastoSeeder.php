<?php

namespace Database\Seeders;

use App\Models\Gasto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gasto::create([
            'descricao' => 'Ingredientes',
            'custo' => 140.00,
            'data' => date('Y-m-d', strtotime('20-07-2024')),
            'user_id' => 1,
        ]);

        Gasto::create([
            'descricao' => 'Forminhas',
            'custo' => 80,
            'data' => date('Y-m-d', strtotime('01-07-2024')),
            'user_id' => 1,
        ]);

        Gasto::create([
            'descricao' => 'Cantinho Doce',
            'custo' => 31.20,
            'data' => date('Y-m-d', strtotime('24-07-2024')),
            'user_id' => 1,
        ]);
    }
}
