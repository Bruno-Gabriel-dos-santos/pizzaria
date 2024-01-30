<!--
=============================================================================================================================||
	                                                                                                                         ||   
										    	!!! LEIA !!!                                                                 ||
                                                                                                                             ||
	SITE DESENVOLVIDO POR BRUNO GABRIEL DOS SANTOS EM 01/2O24, SOU UM DESENVOLVEDOR WEB E STAND-ALONE TRABALHO DESENVOLVENDO ||
	SITES E SISTEMAS TANTO PARA MEIOS ONLINE QUANTO SISTEMAS OFLINE, BANCO DE DADOS E MANUTENÇÃO E ATUALIZAÇÃO DE SISTEMAS   ||
	ENTRE EM CONTATO MANDANDO UM EMAIL PARA brunogbruoute@gmail.com                                                          ||
	CONECTE COM O PERFIL DO LINKEDIN https://www.linkedin.com/in/bruno-gabriel-dos-santos/                                   ||
	ACESSE OUTROS PROJETOS EM MEU GITHUB https://github.com/Bruno-Gabriel-dos-santos                                         ||
	                                                                                                                         ||
	O SITE FOI DESENVOLVIDO EM PHP/LARAVEL COM AUXILIO DE FRAMEWORK BOOTSTRAP4/5, PARTE DO DESENVOLVIMENTO FRONT-END FOI     ||
	FEITO COM O CONSUMO DE LAYOT OPEN-SOURCE DISPONIBILIZADO POR COLORLIB : https://colorlib.com/wp/                         ||
                                                                                                                             ||
	O SITE É OPEN-SOURCE E TEM LICENSA MIT O QUE LHE PERMITE MODIFICAR E USAR PARA FINS COMERCIAS CASO TENHA INTERESSE       ||
                                                                                                                             ||
	Licença MIT                                                                                                              ||
                                                                                                                             ||
	Copyright (c) [2024] [BRUNO GABRIEL DOS SANTOS]                                                                          ||
                                                                                                                             ||
	A permissão é concedida, gratuitamente, a qualquer pessoa que obtenha uma cópia deste software e dos                     ||
	arquivos de documentação associados (o "Software"), para tratar o Software sem restrição, incluindo,                     ||
	sem limitação, os direitos de usar, copiar, modificar, mesclar, publicar, distribuir, sublicenciar                       ||
	e/ou vender cópias do Software, sujeitos às seguintes condições:                                                         ||
                                                                                                                             ||
	O aviso de copyright acima e este aviso de permissão devem ser incluídos em todas as cópias ou partes                    ||
	 substanciais do Software.                                                                                               ||
                                                                                                                             ||
	O SOFTWARE É FORNECIDO "COMO ESTÁ", SEM GARANTIA DE QUALQUER TIPO, EXPRESSA OU IMPLÍCITA, INCLUINDO,                     ||
	MAS NÃO SE LIMITANDO ÀS GARANTIAS DE COMERCIALIZAÇÃO, ADEQUAÇÃO A UM PROPÓSITO ESPECÍFICO E NÃO INFRAÇÃO.                ||
	EM NENHUM CASO OS DETENTORES DOS DIREITOS AUTORAIS SERÃO RESPONSÁVEIS POR QUALQUER RECLAMAÇÃO, DANOS OU                  ||
	OUTRA RESPONSABILIDADE, SEJA EM AÇÃO DE CONTRATO, DELITO OU DE OUTRA FORMA, DECORRENTE DE, OU EM CONEXÃO                 ||
	COM O SOFTWARE OU O USO OU OUTRAS NEGOCIAÇÕES NO SOFTWARE.                                                               ||
=============================================================================================================================||
-->



@extends('layout')

@section('title','Admin')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Pizza</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="{{ route('admin') }}" class="nav-link">Menu ADM</a></li>
              <li class="nav-item"><a href="{{ route('admin.logout') }}" class="nav-link">sair</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>

@if($pag[0] == "produtos")
    <!-- END nav --><br><br><h2 class="text-center">Alteração de Produtos</h2><br><br>

     <!-- CAIXA DE MENSAGEM -->
     <div class="container w-75 mx-auto p-4">

          <h3>Campos de pesquisa para alteração</h3>
     
          <table class="table">
    <tbody>
        <tr>
            <td><strong>Id do Produto:</strong></td>
            <td><strong>Nome do Produto:</strong></td>
            <td><strong>Descrição do Produto:</strong></td>
            <td><strong>Foto do Produto:</strong></td>
            <td><strong>Preço do Produto:</strong></td>
            <td><strong>Valor do Imposto:</strong></td>
            <td><strong>Valor do Lucro:</strong></td>
            <td><strong>Valor das Estrelas:</strong></td>
            <td><strong>Categoria:</strong></td>
            <td><strong>Modificar:</strong></td>
        </tr>
       
        @foreach($dados as $dd)
        <tr>
        <form method="POST" action="{{ route('adminModify') }}">
        @csrf
            <td>{{ $dd[0] }}</td>
            <td><input type="text" class="form-control"   id="nome_produto" name="nome_produto" value="{{ $dd[1] }}" required></td>
            <td><textarea class="form-control"            id="descricao" name="descricao" rows="4"  required>{{ $dd[2] }}</textarea></td>
            <td><input type="text" class="form-control"   id="foto_produto" name="foto_produto" value="{{ $dd[3] }}"  required></td>
            <td><input type="number" class="form-control" id="preco" name="preco" min="0" value="{{ $dd[4] }}" required></td>
            <td><input type="number" class="form-control" id="imposto" name="imposto" min="0" value="{{ $dd[5] }}" required></td>
            <td><input type="number" class="form-control" id="lucro" name="lucro"  min="0" value="{{ $dd[6] }}" required></td>
            <td><input type="number" class="form-control" id="avaliacao" name="avaliacao" min="0" max="5" step="1" value="{{ $dd[7] }}" required></td>
            
            <td><select class="form-control mb-3" id="categoria" name="categoria"  required>
                        <option value="{{ $dd[8] }}" selected>{{ $dd[8] }}</option>
                        <option value="pizza">Pizza</option>
                        <option value="bebida">Bebida</option>
                        <option value="lanche">Lanche</option>
                        <option value="doces">Doces</option>
                </select>
            </td>
            <td>
                <input type="hidden" name="id" value="{{ $dd[0] }}">
                <input type="hidden" name="tabela" value="produtos">
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>


     </div>
@endif

@if($pag[0] == "fornecedor")
    <!-- END nav --><br><br><h2 class="text-center">Alteração de Fornecedor</h2><br><br>

     <!-- CAIXA DE MENSAGEM -->
     <div class="container w-75 mx-auto p-4">

          <h3>Campos de pesquisa para alteração</h3>
     
          <table class="table">
    <tbody>
        <tr>
            <td><strong>Id do Fornecedor:</strong></td>
            <td><strong>Nome do Fornecedor:</strong></td>
            <td><strong>Endereço do Fornecedor:</strong></td>
            <td><strong>CNPJ do Fornecedor:</strong></td>
            <td><strong>Telefone do Fornecedor:</strong></td>
            <td><strong>Email do Fornecedor:</strong></td>
            <td><strong>Modificar:</strong></td>
        </tr>
       
        @foreach($dados as $dd)
        <tr>
        <form method="POST" action="{{ route('adminModify') }}">
        @csrf
        
            <td>{{ $dd[0] }}</td>
            <td><input type="text" class="form-control" id="nome" name="nome" value="{{ $dd[1] }}" required></td>
            <td><input type="text" class="form-control" id="endereco" name="endereco" value="{{ $dd[2] }}" required></td>
            <td><input type="number" class="form-control" id="cnpj" name="cnpj" min="0" value="{{ $dd[3] }}" required></td>
            <td><input type="number" class="form-control" id="telefone" name="telefone" min="0" value="{{ $dd[4] }}" required></td>
            <td><input type="email" class="form-control" id="email" name="email" value="{{ $dd[5] }}" required></td>
        
            <td>
                <input type="hidden" name="id" value="{{ $dd[0] }}">
                <input type="hidden" name="tabela" value="fornecedor">
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>










     </div>
@endif


@if($pag[0] == "estoque")
    <!-- END nav --><br><br><h2 class="text-center">Alteração de Item/insumo </h2><br><br>

     <!-- CAIXA DE MENSAGEM -->
     <div class="container w-75 mx-auto p-4">

          <h3>Campos de pesquisa para alteração</h3>
     
          <table class="table">
    <tbody>
        <tr>
            <td><strong>Id do Item/insumo:</strong></td>
            <td><strong>Nome do Item/insumo:</strong></td>
            <td><strong>Prazo validade Item/insumo:</strong></td>
            <td><strong>Quantidade Item/insumo:</strong></td>
            <td><strong>Valor Item/insumo:</strong></td>
            <td><strong>CNPJ do Fornecedor:</strong></td>
            <td><strong>Excluir:</strong></td>
        </tr>
       
        @foreach($dados as $dd)
        <tr>
        <form method="POST" action="{{ route('adminModify') }}">
        @csrf
            <td>{{ $dd[0] }}</td>
            <td><input type="text" class="form-control" id="nome_item" name="nome_item" value="{{ $dd[1] }}" required></td>
            <td><input type="date" class="form-control" id="prazo_validade" name="prazo_validade" value="{{ $dd[2] }}" required></td>
            <td><input type="number" class="form-control" id="quantidade" name="quantidade" min="0" value="{{ $dd[3] }}" required></td>
            <td><input type="number" class="form-control" id="valor" name="valor" min="0" value="{{ $dd[4] }}" required></td>
            <td><input type="text" class="form-control" id="fornecedor_cnpj" name="fornecedor_cnpj" value="{{ $dd[5] }}" required></td>
            <td>
                <input type="hidden" name="id" value="{{ $dd[0] }}">
                <input type="hidden" name="tabela" value="estoque">
                <button type="submit" class="btn btn-primary">Modificar</button>
            </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>










     </div>
@endif

@if($pag[0] == "funcionario")
    <!-- END nav --><br><br><h2 class="text-center">Alteração de Funcionario </h2><br><br>

     <!-- CAIXA DE MENSAGEM -->
     <div class="container w-75 mx-auto p-4">

          <h3>Campos de pesquisa para alteração, clique e modifique os campos. Apos clique em modificar, modificar apenas 1 campo por vez.</h3>
     
          <table class="table">
    <tbody>
        <tr>
            <td><strong>Id do Funcionario:</strong></td>
            <td><strong>Nome do Funcionario:</strong></td>
            <td><strong>Endereço do Funcionario:</strong></td>
            <td><strong>CPF do Funcionario:</strong></td>
            <td><strong>Telefone:</strong></td>
            <td><strong>Salario:</strong></td>
            <td><strong>Cargo do Funcionario:</strong></td>
            <td><strong>Status do Funcionario:</strong></td>
            <td><strong>Excluir:</strong></td>
        </tr>
       
        @foreach($dados as $dd)
        <tr>
        <form method="POST" action="{{ route('adminModify') }}">
        @csrf
        
            <td>{{ $dd[0] }}</td>
            <td><input type="text" class="form-control" id="nome" name="nome" value="{{ $dd[1] }}" required></td>
            <td><input type="text" class="form-control" id="endereco" name="endereco" value="{{ $dd[2] }}" required></td>
            <td><input type="text" class="form-control" id="cpf" name="cpf" value="{{ $dd[3] }}" required></td>
            <td><input type="number" class="form-control" id="telefone" name="telefone" min="0" value="{{ $dd[4] }}" required></td>
            <td><input type="number" class="form-control" id="salario" name="salario" value="{{ $dd[5] }}" required></td>
            <td><input type="text" class="form-control" id="cargo" name="cargo" value="{{ $dd[6] }}" required> </td>           
            <td><select class="form-control mb-3" id="status" name="status" required>
                    <option value="{{ $dd[7] }}">{{ $dd[7] }}</option>
                    <option value="ativo">Ativo</option>
                    <option value="ferias">Férias</option>
                    <option value="desligado">Desligado</option>
                </select>
            </td>


            <td>
               
                <input type="hidden" name="id" value="{{ $dd[0] }}">
                <input type="hidden" name="tabela" value="funcionario">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>










     </div>
@endif
         
            
        </main>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
          
         


    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">PizzaPizza</h2>
              
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Serviços</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Local</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Venha Conhecer</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">
						Rua São João N-999 Mogi das Cruzes-SP</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(11) 94411-9900<br>
						(11) 98711-9600</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@endsection


{{-- modelo de dados == {{ $dadosModel[0] }} --}}
 