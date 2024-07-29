<?php

namespace Database\Seeders;

use App\Models\EntradaProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntradaProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntradaProduto::create([
            'quantidade' => 24,
            'data' => date('Y-m-d', strtotime('23-07-2024')),
            'produto_id' => 1, // brownie
            'user_id' => 1,
        ]);

        EntradaProduto::create([
            'quantidade' => 12,
            'data' => date('Y-m-d', strtotime('23-07-2024')),
            'produto_id' => 2, // doce
            'user_id' => 1,
        ]);
    }
}
