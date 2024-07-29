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
        Schema::create('entrada_produtos', function (Blueprint $table) {
            $table->id('entrada_produtos_id');
            $table->decimal('quantidade', 10, 2);
            $table->date('data');
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
        Schema::dropIfExists('entrada_produtos');
    }
};
