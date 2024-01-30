<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Authenticatable implements AuthenticatableContract
{
    // ...

   
    public $timestamps = true; // Se você estiver usando timestamps (created_at e updated_at)
    protected $username = 'nick';
    protected $password = 'senha';

    
    protected $table = 'users';

    protected $fillable = [
        'nick',
        'nome',
        'sobrenome',
        'numero_telefone',
        'cpf',
        'email',
        'endereco',
        'numero_end',
        'senha',
    ];

    

    // Outros atributos e métodos do modelo, se houver
}
