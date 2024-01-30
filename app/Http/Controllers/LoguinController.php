<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;


class LoguinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
       //
       $dadosModel=array();
       $dadosModel[]="um teste";

       //faz o model e retorna os dados necessarios ja processados
       return view('loguin',['dadosModel' => $dadosModel]);
    }

    /**
     * Show the form for validating a resource.
     */
    public function loguin(Request $request)
    {

        


        $request->validate([
            'nick' => 'required',
            'senha' => 'required',
        ], [
            'nick.required' => 'Campo Nick não preenchido.',
            'senha.required' => 'Campo Senha não preenchido.',
        ]);
        $nick=$request->input('nick');
        $senha=$request->input('senha');

        

        $senhaCriptografada = bcrypt($senha);

       
        $usuario = (new Usuario)->verificarCredenciais($nick, $senha);

        
        
        if ($usuario) {
            // Credenciais corretas, faça o que for necessário, como autenticação com Auth, etc.
            // Exemplo com Auth:
            $idUsuario = $usuario['id'];

            Auth::loginUsingId($idUsuario);  // Onde $usuarioId é o ID do usuário que você deseja autenticar

            return Redirect::route('home');
            
        } else {

            $request->validate([
                'erro' => 'required'
            ], [
                'erro.required' => 'Nick ou senha Incorretos.',
            ]);

        }

        
            
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        //
        Auth::logout();

        return Redirect::route('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
