<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'id_usuario',
        'id_do_pedido',
        'id_do_produto',
        'quantidade',
        'precoTotal',
        
    ];
}
