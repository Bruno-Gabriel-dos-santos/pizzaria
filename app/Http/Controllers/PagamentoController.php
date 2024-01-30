<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\User;
use App\Models\carrinho;
use App\Models\produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;


class PagamentoController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            // O usuário está autenticado
            
        } else {
            // O usuário não está autenticado
            return Redirect::route('home');
        }
       
                
        $usuario = Auth::user();
        $id_usuario= $usuario->id;
        
        if($id_usuario!=null){
            $produtos = carrinho::where('id_usuario', $id_usuario)->get();
        }

        if(!$produtos){ 
            return Redirect::route('catalogo');   
        }
        
               
                
                
                if($id_usuario){
                $dados=array();

                $dados = [
                    'nome' => $usuario->nome,
                    'numero_telefone' => $usuario->numero_telefone,
                    'endereco' => $usuario->endereco,
                    'numero_end' => $usuario->numero_end,
                   
                ];
                    

                    }
          //
       
       //faz o model e retorna os dados necessarios ja processados
       return view('pagamento',['dados' => $dados]);
    }

    

}
