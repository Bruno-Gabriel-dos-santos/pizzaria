<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estoque extends Model
{
    protected $table = 'estoque';

    protected $fillable = [
        'nome_item',
        'prazo_validade',
        'quantidade',
        'valor',
        'fornecedor_cnpj'
       
       
    ];
}
