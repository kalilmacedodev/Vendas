<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Bolo',
            'nome_unidade' => 'Unidade',
            'preco' => 25,
            // 'base64_imagem' => ,
        ]);

        Produto::create([
            'nome' => 'Doce',
            'nome_unidade' => 'Pacote',
            'preco' => 30,
            // 'base64_imagem' => ,
        ]);
    }
}
