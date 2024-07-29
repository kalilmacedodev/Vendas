<?php

namespace Database\Seeders;

use App\Models\SaidaProduto;
use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venda::create([
            'preco' => 50,
            'data' => date('Y-m-d'),
            'cliente_id' => 1,
            'user_id' => 1,
        ]);

            SaidaProduto::create([
                'quantidade' => 2,
                'data' => date('Y-m-d'),
                'tipo_saida_id' => 1,
                'venda_id' => 1,
                'produto_id' => 1,
                'user_id' => 1,
            ]);

        Venda::create([
            'preco' => 140,
            'data' => date('Y-m-d'),
            'cliente_id' => 2,
            'user_id' => 1,
        ]);

            SaidaProduto::create([
                'quantidade' => 5,
                'data' => date('Y-m-d'),
                'tipo_saida_id' => 1,
                'venda_id' => 2,
                'produto_id' => 1,
                'user_id' => 1,
            ]);

            SaidaProduto::create([
                'quantidade' => 1,
                'data' => date('Y-m-d'),
                'tipo_saida_id' => 1,
                'venda_id' => 2,
                'produto_id' => 2,
                'user_id' => 1,
            ]);
    }
}
