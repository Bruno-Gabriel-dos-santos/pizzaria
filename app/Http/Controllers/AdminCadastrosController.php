<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\admin;
use App\Models\produtos;
use App\Models\fornecedores;
use App\Models\funcionario;
use App\Models\estoque;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;


class AdminCadastrosController extends Controller
{
    
    public function cadastrar_produto(Request $request){
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {


            $nome_produto      = $request->input('nome_produto');
            $descricao_produto = $request->input('descricao');
            $foto_produto      = $request->input('foto_produto');
            $preco_produto     = $request->input('preco');
            $valor_imposto     = $request->input('imposto');
            $valor_lucro       = $request->input('lucro');
            $valor_estrelas    = $request->input('avaliacao');
            $categoria         = $request->input('categoria');

          
           
            $dadosProduto = [
                'nome_produto'      =>  $nome_produto,
                'descricao_produto' =>  $descricao_produto,
                'foto_produto'      =>  $foto_produto,
                'preco_produto'     =>  $preco_produto,
                'valor_imposto'     =>  $valor_imposto,
                'valor_lucro'       =>  $valor_lucro,
                'valor_estrelas'    =>  $valor_estrelas,
                'categoria'         =>  $categoria  
                // outros campos...
            ];
    
            // Criação do usuário no banco de dados
            produtos::create($dadosProduto);

            $dados=array();
            $dados[]="Produto Cadastrado com Sucesso !!! ";
            
            return view('adminCadastroSucesso',['dados'=> $dados]);
           
        } else {

            return Redirect::route('home');

        }
    }

    public function cadastrar_produtoFornecedor(Request $request){
        
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

            
            $nome            = $request->input('nome_item');
            $cnpj            = $request->input('cnpj');
            $validade        = $request->input('validade');
            $preco           = $request->input('preco');
            $quant           = $request->input('qnt');
            
          
           
            $dadosEstoque = [
                'nome_item'      =>  $nome,
                'prazo_validade'  =>  $validade,
                'quantidade'      =>  $quant,
                'valor'  =>  $preco,
                'fornecedor_cnpj'     =>  $cnpj
                
                // outros campos...
            ];
    
            // Criação do usuário no banco de dados
            estoque::create($dadosEstoque);

            $dados=array();
            $dados[]="Item Cadastrado com Sucesso !!! ";
            
            return view('adminCadastroSucesso',['dados'=> $dados]);
           
        } else {

            return Redirect::route('home');

        }
    }

    public function cadastrar_fornecedor(Request $request){
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

            
            $nome        = $request->input('nome_fornecedor');
            $endereco    = $request->input('endereco');
            $cnpj        = $request->input('cnpj');
            $telefone    = $request->input('telefone');
            $email       = $request->input('email');
            
          
           
            $dadosFornecedor = [
                'nome'      =>  $nome,
                'endereco'  =>  $endereco,
                'cnpj'      =>  $cnpj,
                'telefone'  =>  $telefone,
                'email'     =>  $email,
                
                // outros campos...
            ];
    
            // Criação do usuário no banco de dados
            fornecedores::create($dadosFornecedor);

            $dados=array();
            $dados[]="Fornecedor Cadastrado com Sucesso !!! ";
            
            return view('adminCadastroSucesso',['dados'=> $dados]);
           
        } else {

            return Redirect::route('home');

        }
    }

    public function cadastrar_funcionario(Request $request){
        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

         
            $nome        = $request->input('nome');
            $endereco    = $request->input('endereco');
            $cpf        = $request->input('cpf');
            $telefone    = $request->input('telefone');
            $salario       = $request->input('salario');
            $cargo       = $request->input('cargo');
            $status      =$request->input('status');
            
          
           
            $dadosFuncionario = [
                'nome'      =>  $nome,
                'endereco'  =>  $endereco,
                'cpf'      =>  $cpf,
                'telefone'  =>  $telefone,
                'salario'   =>  $salario,
                'cargo'     =>  $cargo,
                'status'     =>  $status
                
                // outros campos...
            ];
    
            // Criação do usuário no banco de dados
            funcionario::create($dadosFuncionario);

            $dados=array();
            $dados[]="Funcionario Cadastrado com Sucesso !!! ";
            
            return view('adminCadastroSucesso',['dados'=> $dados]);
           
        } else {

            return Redirect::route('home');

        }
    }
}
