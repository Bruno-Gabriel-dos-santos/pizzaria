<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'nome_produto',
        'descricao_produto',
        'foto_produto',
        'preco_produto',
        'valor_imposto',
        'valor_lucro',
        'valor_estrelas',
       
    ];
}
