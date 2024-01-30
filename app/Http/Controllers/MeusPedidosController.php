<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\User;
use App\Models\carrinho;
use App\Models\produtos;
use App\Models\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class MeusPedidosController extends Controller
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
          //
        $usuario = Auth::user();
        $id_usuario= $usuario->id;

         $prod=array();
         $produto=array();
         
         $produtos = produtos::orderBy('id')->get();

         foreach($produtos as $pd){
            $prod[0]=$pd->id;
            $prod[1]=$pd->nome_produto;
            $prod[2]=$pd->preco_produto;
            $produtos[]=$prod;
          }
          
        $ultimoPedido = pedidos::orderBy('id_do_pedido', 'desc')->first();

        $idPedido =  $ultimoPedido->id_do_pedido;

          $pedds=array();
          $pedido=array();
          
          $pedidos = pedidos::where('id_do_pedido', $idPedido)->where('id_usuario', $id_usuario)->get();
 
          foreach($pedidos as $pedidos){
             $pedds[0]=$pedidos->id_do_produto;
             $pedds[1]=$pedidos->precoTotal;
             $pedds[2]=$pedidos->quantidade;
             $pedds[3]=$pedidos->created_at->format('d-m-Y H:i:s');
             
             $pedido[]=$pedds;
           }

          $todos_pedds=array();
          $divisor=array();
          $todos_pedidos=array();
          $status=0;

          $todos_pedido = pedidos::where('id_usuario', $id_usuario)->orderBy('id_do_pedido', 'desc')->get();
 
          foreach($todos_pedido as $pedidos){

             $todos_pedds[0]=$pedidos->id_do_pedido;
             $todos_pedds[1]=$pedidos->id_do_produto;
             $todos_pedds[2]=$pedidos->precoTotal;
             $todos_pedds[3]=$pedidos->quantidade;
             $todos_pedds[4]=$pedidos->created_at->format('d-m-Y H:i:s');
             
             $divisor[]=$todos_pedds;


             if($status!=$todos_pedds[0]){
                $todos_pedidos[]=$divisor;
                $status=$todos_pedds[0];
                $divisor=array();
             }
           }


        
    
       //faz o model e retorna os dados necessarios ja processados
       return view('meusPedidos',['produtos' => $produtos,'pedido' => $pedido,'todos_pedidos' => $todos_pedidos]);
    }


    public function cadastramento(Request $request)
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

        if($produtos){
        $valorTotal=0;

        $ultimoPedido = pedidos::orderBy('id_do_pedido', 'desc')->first();

        $novoIdPedido = ($ultimoPedido) ? $ultimoPedido->id_do_pedido + 1 : 1;

        foreach ($produtos as $produtos) {
           
            $id_produto=$produtos->id_produto;
            
            $produto=produtos::where('id', $id_produto)->get();
            $produto_split=$produto->first();
            
            $id_do_produto = $produtos->id_produto;
            $quantidade    = $produtos->quantidade;
            $preco_produto = $produto_split->preco_produto;

            $valorTotal=$preco_produto*$quantidade;

            pedidos::create([
                'id_usuario' => $id_usuario,
                'id_do_produto' => $id_produto,
                'quantidade' => $quantidade,
                'id_do_pedido' => $novoIdPedido ,
                'precoTotal' => $valorTotal
                
            ]);
            
            }

        

        $registros = carrinho::where('id_usuario', $id_usuario)->get();

        if ($registros->count() > 0) {
            $registros->each->delete();
        } else {
            return redirect()->route('home');
        }
        return Redirect::route('meusPedidos');

        }else{
            $dados=array();
                $dados[]="Erro , Não foi encontrado nenhum produto no carrinho  !!!";
                
                return view('caixaMensagem',['dados'=> $dados]);
        }
       



    }

    




}
