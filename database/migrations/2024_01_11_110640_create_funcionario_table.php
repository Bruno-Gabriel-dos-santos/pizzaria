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
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->string('endereco'); 
            $table->string('cpf'); 
            $table->string('telefone'); 
            $table->decimal('salario', 10, 2); 
            $table->string('cargo'); 
            $table->string('status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionario');
    }
};
