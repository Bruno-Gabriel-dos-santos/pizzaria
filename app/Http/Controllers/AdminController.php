<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\admin;
use App\Models\produtos;
use App\Models\fornecedores;
use App\Models\funcionario;
use App\Models\estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $dados=array();
        return view('loguin_adm',['dados'=> $dados]);
    }

    public function login(Request $request){


        
        /*USAR EM CASO DE CADASTRAMENTO DE ADMIN !!! USE SOMENTE PARA CADASTRAR E COMENTE, NÃO DEIXE O CADASTRAMENTO ACESSIVEL AO USUARIO COMUM !!!!!!
        $senha="umasenhaabsurdamenteforteA2@";
        $senhaCriptografada = bcrypt($senha);
        $dadosAdmin = [
            'nick' => "adm",
            'senha' => $senhaCriptografada
            // outros campos...
        ];

        // Criação do usuário no banco de dados
        admin::create($dadosAdmin);
        */

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 

        $request->validate([
            'nick' => 'required',
            'senha' => 'required',
        ], [
            'nick.required' => 'Campo Nick não preenchido.',
            'senha.required' => 'Campo Senha não preenchido.',
        ]);

        $nick=$request->input('nick');
        $senha=$request->input('senha');

        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {
            
            $idUsuario = $admin['id'];
            // uso de session 
            session(['nick' => $nick,'senha' => $senha]);
            return Redirect::route('admin');
        } else {

            $request->validate([
                'erro' => 'required'
            ], [
                'erro.required' => 'Nick ou senha Incorretos.',
            ]);

        }

    }

    public function admin(){

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 

        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

            $dados=array();
            return view('admin',['dados'=> $dados]);
           
        } else {

            return Redirect::route('home');

        }
    }

    public function logout(){
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        session()->flush();
        return Redirect::route('home');

    }


}
