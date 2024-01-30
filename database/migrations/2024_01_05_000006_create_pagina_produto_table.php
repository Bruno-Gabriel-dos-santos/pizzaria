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
        Schema::create('pagina_produto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produto');
            $table->string('nome_produto');
            $table->string('prologo_produto')->nullable();
            $table->text('texto_produto')->nullable();
            $table->json('fotos_produto')->nullable();
            $table->timestamps();

            $table->foreign('id_produto')->references('id')->on('produtos');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagina_produto');
    }
};
