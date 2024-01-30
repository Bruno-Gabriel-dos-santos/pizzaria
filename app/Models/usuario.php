<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
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
    
    public function verificarCredenciais($nick, $senha)
    {
        $usuario = Usuario::where('nick', $nick)->first();

        if ($usuario && password_verify($senha, $usuario->senha)) {
            return $usuario;
        }

        return null;
    }


    // Outros atributos e métodos do modelo, se houver

}
