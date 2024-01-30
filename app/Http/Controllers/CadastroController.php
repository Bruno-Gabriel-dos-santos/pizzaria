<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
       $dadosModel=array();
       $dadosModel[]="um teste";
    
       //faz o model e retorna os dados necessarios ja processados
       return view('cadastro',['dadosModel' => $dadosModel]);
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
        $request->validate([
            'nick' => 'required|string|unique:users|max:255',
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'numero_telefone' => 'required|string|max:20',
            'cpf' => 'required|string|unique:users|max:14',
            'email' => 'required|string|email|unique:users|max:255',
            'endereco' => 'required|string|max:255',
            'numero_end' => 'required|string|max:10',
            'senha' => 'required|string|min:6',
        ], [
            'nick.required' => 'Campo Nick não preenchido.',
            'nick.string' => 'Caracteres especiais não são permitidos',
            'nick.unique' => 'O Nick fornecido já está em uso.',
            'nick.max' => 'O Nick não pode ter mais de 240 caracteres.',
        
            'nome.required' => 'Campo Nome não preenchido.',
            'nome.string' => 'Caracteres especiais não são permitidos.',
            'nome.max' => 'O Nome não pode ter mais de 240 caracteres.',
        
            'sobrenome.required' => 'Campo Sobrenome não preenchido.',
            'sobrenome.string' => 'Caracteres especiais não são permitidos.',
            'sobrenome.max' => 'O Sobrenome não pode ter mais de 240 caracteres.',
        
            'numero_telefone.required' => 'Campo Número de Telefone não preenchido.',
            'numero_telefone.string' => 'Caracteres especiais não são permitidos.',
            'numero_telefone.max' => 'O Número de Telefone não pode ter mais de 20 caracteres.',
        
            'cpf.required' => 'Campo CPF não preenchido.',
            'cpf.string' => 'Caracteres especiais não são permitidos.',
            'cpf.unique' => 'O CPF fornecido já está em uso.',
            'cpf.max' => 'O CPF não pode ter mais de 14 caracteres.',
        
            'email.required' => 'Campo Email não preenchido.',
            'email.string' => 'Caracteres especiais não são permitidos.',
            'email.email' => 'O Email fornecido não é válido.',
            'email.unique' => 'O Email fornecido já está em uso.',
            'email.max' => 'O Email não pode ter mais de 240 caracteres.',
        
            'endereco.required' => 'Campo Endereço não preenchido.',
            'endereco.string' => 'Caracteres especiais não são permitidos.',
            'endereco.max' => 'O Endereço não pode ter mais de 240 caracteres.',
        
            'numero_end.required' => 'Campo Número do Endereço não preenchido.',
            'numero_end.string' => 'Caracteres especiais não são permitidos.',
            'numero_end.max' => 'O Número do Endereço não pode ter mais de 10 caracteres.',
        
            'senha.required' => 'Campo Senha não preenchido.',
            'senha.string' => 'Caracteres especiais não são permitidos.',
            'senha.min' => 'A Senha deve ter no mínimo 6 caracteres.',
        ]);
        
        
        $senha = $request->input('senha');

        // Criptografando a senha usando bcrypt
        $senhaCriptografada = bcrypt($senha);

        // Dados do usuário que você deseja inserir
        $dadosUsuario = [
            'nick' => $request->input('nick'),
            'nome' => $request->input('nome'),
            'sobrenome' => $request->input('sobrenome'),
            'numero_telefone' => $request->input('numero_telefone'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'endereco' => $request->input('endereco'),
            'numero_end' => $request->input('numero_end'),
            'senha' => $senhaCriptografada,
            // outros campos...
        ];

        // Criação do usuário no banco de dados
        usuario::create($dadosUsuario);

    
       //faz o model e retorna os dados necessarios ja processados
       return view('cadastro_sucesso');

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
