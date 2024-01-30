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


class CarrinhoController extends Controller
{

    

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
        if (Auth::check()) {
             // adiciona o item no carrinho
             $id_produto= $request->input('id');
             $quantidade= $request->input('qnt');
             $usuario = Auth::user();
             $id_usuario= $usuario->id;
    
            Carrinho::updateOrCreate(
                [
                    'id_produto' => $id_produto,
                    'id_usuario' => $id_usuario,
                    
                ],
                [
                    'quantidade' => \DB::raw('quantidade + ' . $quantidade),
                ]
            );
        

            echo "1";
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if (Auth::check()) {
                $usuario = Auth::user();
                $id_usuario= $usuario->id;
                
                if($id_usuario!=null){
                    $produtos = carrinho::where('id_usuario', $id_usuario)->get();
                }

                if($produtos){
                $dado=array();
                $dados=array();
                foreach ($produtos as $produtos) {
                   
                    $id_produto=$produtos->id_produto;
                    
                    $produto=produtos::where('id', $id_produto)->get();
                    $produto_split=$produto->first();
                   
                    $dado = [
                        'id_produto' => $produtos->id_produto,
                        'quantidade' => $produtos->quantidade,
                        'nome_produto' => $produto_split->nome_produto,
                        'descricao_produto' => $produto_split->descricao_produto,
                        'foto_produto' => $produto_split->foto_produto,
                        'preco_produto' => $produto_split->preco_produto,
                    ];
                    $dados[]=$dado;
                                }

                return json_encode($dados);


                }
        }
    }

    public function diminuir(Request $request){
        if (Auth::check()) {
                $usuario = Auth::user();
                $id_usuario= $usuario->id;
                $id_produto= $request->input('id');

                if($id_usuario!=null){
                    $produtos = carrinho::where('id_usuario', $id_usuario)->where('id_produto', $id_produto)->get();
                    
                }

                if ($produtos->isNotEmpty()) {
                    // Obter o primeiro item da coleção
                    $produto = $produtos->first();
            
                    // Verificar se a quantidade é maior que 1
                    if ($produto->quantidade > 1) {
                        // Reduzir a quantidade em 1
                        $produto->quantidade -= 1;
            
                        // Salvar as alterações
                        $produto->save();
            
                        // Retornar um indicador de sucesso (ou qualquer outro valor desejado)
                        return 1;
                    }
                }

               
        }

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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        if (Auth::check()) {
            // adiciona o item no carrinho
            $id_produto= $request->input('id');
            
            $usuario = Auth::user();
            $id_usuario= $usuario->id;

            
            $registro = carrinho::where('id_usuario', $id_usuario)
                        ->where('id_produto', $id_produto)
                        ->first();


            if ($registro) {
            
            $registro->delete();
            echo "1";
            }

           
       }
    }
}
