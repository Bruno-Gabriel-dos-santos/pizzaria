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
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->string('nome_item');
            $table->date('prazo_validade')->nullable();
            $table->integer('quantidade');
            $table->decimal('valor', 8, 2);
            $table->string('fornecedor_cnpj');
            $table->timestamps();

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
