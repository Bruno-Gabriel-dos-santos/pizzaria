<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrinho extends Model
{
    protected $table = 'carrinho';

    protected $fillable = [
        'id_produto',
        'quantidade',
        'id_usuario'
    ];
}
