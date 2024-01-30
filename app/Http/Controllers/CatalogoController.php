<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrinho;
use App\Models\produtos;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //
         

        
        $pizza=array();
        $pizzas=array();

        $bebida=array();
        $bebidas=array();

        $burg=array();
        $burguer=array();

        $batt=array();
        $batata=array();

        $doce=array();
        $doces=array();

         $categoria='Pizza';
         $produtos = produtos::where('categoria', $categoria)->get();

         foreach($produtos as $pz){
            $pizza[0]=$pz->id;
            $pizza[1]=$pz->foto_produto;
            $pizza[2]=$pz->nome_produto;
            $pizza[3]=$pz->preco_produto;
            $pizza[4]=$pz->descricao_produto;
            $pizzas[]=$pizza;
         }

         $categoria='Bebida';
         $produtos = produtos::where('categoria', $categoria)->get();
         
         foreach($produtos as $bb){
            $bebida[0]=$bb->id;
            $bebida[1]=$bb->foto_produto;
            $bebida[2]=$bb->nome_produto;
            $bebida[3]=$bb->preco_produto;
            $bebida[4]=$bb->descricao_produto;
            $bebidas[]=$bebida;
         }

         $categoria='Bebida';
         $produtos = produtos::where('categoria', $categoria)->get();
         
         foreach($produtos as $bb){
            $burg[0]=$bb->id;
            $burg[1]=$bb->foto_produto;
            $burg[2]=$bb->nome_produto;
            $burg[3]=$bb->preco_produto;
            $burg[4]=$bb->descricao_produto;
            $burguer[]=$burg;
         }
         
         $categoria='Bebida';
         $produtos = produtos::where('categoria', $categoria)->get();
         
         foreach($produtos as $bb){
            $batt[0]=$bb->id;
            $batt[1]=$bb->foto_produto;
            $batt[2]=$bb->nome_produto;
            $batt[3]=$bb->preco_produto;
            $batt[4]=$bb->descricao_produto;
            $batata[]=$batt;
         }

         $categoria='Bebida';
         $produtos = produtos::where('categoria', $categoria)->get();
         
         foreach($produtos as $bb){
            $doce[0]=$bb->id;
            $doce[1]=$bb->foto_produto;
            $doce[2]=$bb->nome_produto;
            $doce[3]=$bb->preco_produto;
            $doce[4]=$bb->descricao_produto;
            $doces[]=$doce;
         }

         
         
         //faz o model e retorna os dados necessarios ja processados
         return view('catalogo',['pizzas'=> $pizzas,'bebidas'=> $bebidas,'burguer'=> $burguer,'batata'=> $batata,'doces'=> $doces]);

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
