<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'nick',
        'senha',
    ];
    
    public function verificarCredenciais($nick, $senha)
    {
        $admin = admin::where('nick', $nick)->first();

        if ($admin && password_verify($senha, $admin->senha)) {
            return $admin;
        }

        return null;
    }

}
