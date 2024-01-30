<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [
        'nome',
        'endereco',
        'cnpj',
        'telefone',
        'email'
       
       
    ];
}
