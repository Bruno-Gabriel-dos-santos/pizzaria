<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class MinhaContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            // adiciona o item no carrinho
            
            $usuario = Auth::user();
            $id_usuario= $usuario->id;

            
            $user = usuario::where('id', $id_usuario)->first();



            if($user){
                $dados=array();
                $dados[0] = $user->nick;
                $dados[1] = $user->nome;
                $dados[2] = $user->sobrenome;
                $dados[3] = $user->numero_telefone;
                $dados[4] = $user->cpf;
                $dados[5] = $user->email;
                $dados[6] = $user->endereco;
                $dados[7] = $user->numero_end;
                $dados[8] = $user->senha;

                return view('minhaconta',['dados' => $dados]);
            }else{
                $dados=array();
                $dados[]="Erro no sistema ou usuario fora de serviço !!!";
                
                return view('caixaRetorno',['dados'=> $dados]);
            }
            

           
       }else{
        return Redirect::route('home');
       }
        



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
    public function show(Request $request)
    {
       
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
    public function update(Request $request)
    {
        //
        if (Auth::check()) {

        $request->validate([
            'nick' => 'required',
            'nome' => 'required',
            'sobrenome' => 'required',
            'numero_telefone' => 'required',
            'cpf' => 'required',
            'email' => 'required|email',
            'endereco' => 'required',
            'numero_end' => 'required',
        ]);

        $usuario = Auth::user();

        // Atualiza os dados do usuário no banco de dados
        $usuario->update([
            'nick' => $request->input('nick'),
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'numero_telefone' => $request->input('numero_telefone'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'endereco' => $request->input('endereco'),
            'numero_end' => $request->input('numero_end'),
        ]);

        $dados=array();
                $dados[]="Dados alterados com Sucesso !!!";
                
                return view('caixaRetorno',['dados'=> $dados]);

        }else{
            return Redirect::route('home');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
