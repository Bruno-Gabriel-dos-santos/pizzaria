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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->text('descricao_produto');
            $table->string('foto_produto');
            $table->decimal('preco_produto', 8, 2);
            $table->decimal('valor_imposto', 8, 2);
            $table->decimal('valor_lucro', 8, 2);
            $table->integer('valor_estrelas');
            $table->string('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
