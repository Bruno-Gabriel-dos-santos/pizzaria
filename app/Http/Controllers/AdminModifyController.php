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


class AdminModifyController extends Controller
{


    

    public function modificar_produto(Request $request){

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

         
            $nome = $request->input('nome');
           
            if($nome==null){
                  $produtos = produtos::all();
            }else{$produtos = produtos::$produtos = produtos::where('nome', $nomeDoProduto)->get();}

            if ($produtos->isEmpty()) {
                $dados=array();
                $dados[]="Não foi encontrado nenhum produto com o nome: ".$nome."  !!!";
                
                return view('adminCadastroSucesso',['dados'=> $dados]);
            } else {
                $dado=array();
                $dados=array();
                foreach ($produtos as $produto) {
                    $dado[0] = $produto->id;
                    $dado[1] = $produto->nome_produto;
                    $dado[2] = $produto->descricao_produto;
                    $dado[3] = $produto->foto_produto;
                    $dado[4] = $produto->preco_produto;
                    $dado[5] = $produto->valor_imposto;
                    $dado[6] = $produto->valor_lucro;
                    $dado[7] = $produto->valor_estrelas;
                    $dado[8] = $produto->categoria;
                    $dados[]=$dado;
                                }
            }
            
            $pag=array();
            $pag[]="produtos";

            
            return view('adminModify',['dados'=> $dados,'pag' => $pag]);
           
        } else {

            return Redirect::route('home');

        }

    }

    public function modificar_fornecedor(Request $request){

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

         
            $nome = $request->input('nome');
           
            if($nome==null){
                  $fornecedores = fornecedores::all();
            }else{$fornecedores = fornecedores::$fornecedores = fornecedores::where('nome', $nome)->get();}

            if ($fornecedores->isEmpty()) {
                $dados=array();
                $dados[]="Não foi encontrado nenhum Fornecedor com o nome: ".$nome."  !!!";
                
                return view('caixaMensagem',['dados'=> $dados]);
            } else {
                $dado=array();
                $dados=array();
                foreach ($fornecedores as $fornecedores) {
                    $dado[0] = $fornecedores->id;
                    $dado[1] = $fornecedores->nome;
                    $dado[2] = $fornecedores->endereco;
                    $dado[3] = $fornecedores->cnpj;
                    $dado[4] = $fornecedores->telefone;
                    $dado[5] = $fornecedores->email;
                   
                    $dados[]=$dado;
                                }
            }
            


            
            $pag=array();
            $pag[]="fornecedor";

            
            return view('adminModify',['dados'=> $dados,'pag' => $pag]);
           
        } else {

            return Redirect::route('home');

        }

    }

    public function modificar_estoque(Request $request){

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

         
            $nome = $request->input('nome');
           
            if($nome==null){
                  $estoque = estoque::all();
            }else{$estoque = estoque::$estoque = estoque::where('nome', $nome)->get();}

            if ($estoque->isEmpty()) {
                $dados=array();
                $dados[]="Não foi encontrado nenhum Item/insumo com o nome: ".$nome."  !!!";
                
                return view('caixaMensagem',['dados'=> $dados]);
            } else {
                $dado=array();
                $dados=array();
                foreach ($estoque as $estoque) {
                    $dado[0] = $estoque->id;
                    $dado[1] = $estoque->nome_item;
                    $dado[2] = $estoque->prazo_validade;
                    $dado[3] = $estoque->quantidade;
                    $dado[4] = $estoque->valor;
                    $dado[5] = $estoque->fornecedor_cnpj;
                   
                    $dados[]=$dado;
                                }
            }
            


            
            $pag=array();
            $pag[]="estoque";

            
            return view('adminModify',['dados'=> $dados,'pag' => $pag]);
           
        } else {

            return Redirect::route('home');

        }

    }


    public function modificar_funcionario(Request $request){

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        
        
        if ($admin) {

         
            $nome = $request->input('nome');
           
            if($nome==null){
                  $funcionario = funcionario::all();
            }else{$funcionario = funcionario::$funcionario = funcionario::where('nome', $nome)->get();}

            if ($funcionario->isEmpty()) {
                $dados=array();
                $dados[]="Não foi encontrado nenhum Item/insumo com o nome: ".$nome."  !!!";
                
                return view('caixaMensagem',['dados'=> $dados]);
            } else {
                $dado=array();
                $dados=array();
                foreach ($funcionario as $funcionario) {
                    $dado[0] = $funcionario->id;
                    $dado[1] = $funcionario->nome;
                    $dado[2] = $funcionario->endereco;
                    $dado[3] = $funcionario->cpf;
                    $dado[4] = $funcionario->telefone;
                    $dado[5] = $funcionario->salario;
                    $dado[6] = $funcionario->cargo;
                    $dado[7] = $funcionario->status;
                   
                    $dados[]=$dado;
                                }
            }
            


            
            $pag=array();
            $pag[]="funcionario";

            
            return view('adminModify',['dados'=> $dados,'pag' => $pag]);
           
        } else {

            return Redirect::route('home');

        }

    }


    public function modificar_by_id(Request $request){

        if (Auth::check()) {
            // O usuário está autenticado
            return Redirect::route('home');
        } 
        
        $nick = session('nick');
        $senha= session('senha');

        
        $admin = (new admin)->verificarCredenciais($nick, $senha);

        if ($admin) {

            // realiza a exclusão dos dados do produto
            $id=$request->input('id');
            $tabela=$request->input('tabela');
            
                if($tabela=="produtos"){
                    $produto = produtos::find($id);

                    if ($produto) {
                        $produto->update([
                            
                            
                            'nome_produto' => $request->input('nome_produto'),
                            'descricao'    => $request->input('descricao'),
                            'foto_produto' => $request->input('foto_produto'),
                            'preco'        => $request->input('preco'),
                            'imposto'      => $request->input('imposto'),
                            'lucro'        => $request->input('lucro'),
                            'avaliacao'    => $request->input('avaliacao'),
                            'categoria'    => $request->input('categoria')
                        ]);

                        $dados=array();

                        $dados[]="Produto Modificado com sucesso !!! ";
                       
                        return view('caixaMensagem',['dados'=> $dados]);
                    } 

                    $dados=array();
                    $dados[]="Produto não existe ou não pode ser Modificado !!! ";
                    
                    return view('caixaMensagem',['dados'=> $dados]);
                
                }elseif($tabela=="fornecedor"){
                    $fornecedores = fornecedores::find($id);

                    if ($fornecedores) {
                        $fornecedores->update([
                            
                            'nome'        => $request->input('nome'),
                            'endereco'    => $request->input('endereco'),
                            'cnpj'        => $request->input('cnpj'),
                            'telefone'    => $request->input('telefone'),
                            'email'       => $request->input('email')
                        ]);

                        $dados=array();

                        $dados[]="Fornecedor Modificado com sucesso !!! ";
                        
                        return view('caixaMensagem',['dados'=> $dados]);
                    } 

                    $dados=array();
                    $dados[]="Fornecedor não existe ou não pode ser Modificado !!! ";
                    
                    return view('caixaMensagem',['dados'=> $dados]);
                    
                }elseif($tabela=="estoque"){
                    $estoque = estoque::find($id);

                    if ($estoque) {
                        $estoque->update([
                            
                            'nome_item'         => $request->input('nome_item'),
                            'prazo_validade'    => $request->input('prazo_validade'),
                            'quantidade'        => $request->input('quantidade'),
                            'valor'             => $request->input('valor'),
                            'Fornecedor_cnpj'   => $request->input('Fornecedor_cnpj')
                        ]);

                        $dados=array();

                        $dados[]="Item do estoque/insumo Modificado com sucesso !!! ";
                        
                        return view('caixaMensagem',['dados'=> $dados]);
                    } 

                    $dados=array();
                    $dados[]="Item do estoque/insumo não existe ou não pode ser Modificado !!! ";
                    
                    return view('caixaMensagem',['dados'=> $dados]);
                    
                }elseif($tabela=="funcionario"){
                    $funcionario = funcionario::find($id);

                    if ($funcionario) {
                        $funcionario->update([
                            
                            'nome'      => $request->input('nome'),
                            'endereco'  => $request->input('endereco'),
                            'cpf'       => $request->input('cpf'),
                            'telefone'  => $request->input('telefone'),
                            'salario'   => $request->input('salario'),
                            'cargo'     => $request->input('nome'),
                            'status'    => $request->input('status')
                        ]);

                        $dados=array();

                        $dados[]="Funcionario Modificado com sucesso !!! ";
                        
                        return view('caixaMensagem',['dados'=> $dados]);
                    } 

                    $dados=array();
                    $dados[]="Funcionario não existe ou não pode ser Modificado !!! ";
                    
                    return view('caixaMensagem',['dados'=> $dados]);
                    
                }else{
                    $dados=array();
                    $dados[]="Servidor apresentou erro !!! ";
                    
                    return view('caixaMensagem',['dados'=> $dados]);
                }
           
        } else {

            return Redirect::route('home');

        }
       
    }





}
