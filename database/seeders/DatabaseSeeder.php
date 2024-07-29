<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TipoSaida;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        // $this->call(ClienteSeeder::class);

        $this->call(TipoSaidaSeeder::class);
        // $this->call(ProdutoSeeder::class);

        // $this->call(GastoSeeder::class);
        // $this->call(VendaSeeder::class);

        // $this->call(EntradaProdutosSeeder::class);
        // $this->call(SaidaProdutoSeeder::class);

    }
}
