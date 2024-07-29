<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('saida_produtos', function (Blueprint $table) {
            $table->id('saida_produtos_id');
            $table->decimal('quantidade', 10, 2);
            $table->date('data');
            $table->foreignId('tipo_saida_id')->references('tipo_saida_id')->on('tipo_saidas');
            $table->foreignId('venda_id')->nullable()->references('venda_id')->on('vendas');
            $table->foreignId('produto_id')->references('produto_id')->on('produtos');
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saida_produtos');
    }
};
