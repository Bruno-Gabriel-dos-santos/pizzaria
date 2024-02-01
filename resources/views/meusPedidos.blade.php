
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

@section('title','Meus Pedidos')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Pizza</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="catalogo" class="nav-link">Catalogo</a></li>
	          <li class="nav-item"><a href="sobre" class="nav-link">Sobre</a></li>
	          <li class="nav-item"><a href="contato" class="nav-link">Contato</a></li>
            @auth
            <li class="nav-item active"><a href="meusPedidos" class="nav-link">Meus Pedidos</a></li>
            <li class="nav-item"><a href="minhaconta" class="nav-link">Minha Conta</a></li>
            <li class="nav-item"><a href="{{ route('loguin.logout') }}" class="nav-link">Sair</a></li>
            @endauth
            @guest
            <li class="nav-item"><a href="{{route('loguin.index')}}" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="{{route('cadastro.index')}}" class="nav-link">Cadastrar</a></li>
            @endguest
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    <br><br><h1 class="text-center fs-1">Meus Pedidos</h1><p class="breadcrumbs text-center" style="font-size: 50px;cursor: pointer;">⌄</p><br><br>
    
    
    <header class="py-5" style="">
            
              
            <div class="w-75 mx-auto">
                  <!-- Menu-->
                  <div class="row text-white" >
                      <div onclick="selectDisplay1()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(52, 58, 64,.7);"><p>Pedido Atual</p></div>
                      <div onclick="selectDisplay2()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);border-radius: 0 10px 10px 0;"><p>Historico de pedidos</p></div>
                  </div>


                  @if ($pedido[0])
                  <!-- area de exibição-->
                  <div id="disp1" class="my-5" style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;"><!-- area1 -->
                      <div class="text-center py-2 bg-primary" ><p class="fs-3 text-dark">Ultimo pedido</p></div>
                      <p class="text-center text-white mx-auto m-0 mt-2 p-2" style="background-color: rgba(0, 0, 0,.4);border-radius:10px;width:400px"> pedido realizadao em {{ $pedido[0][3] }}</p>
                      
                      <div class="d-flex">
                      <div class="col-10 p-2 rounded-5">
                          <!-- Div com 75% da largura -->
                          
                          <div class="p-4 " style="background-color: rgba(0, 0, 0,.4);border-radius:10px;">
                          @php
                            $total=0;
                          @endphp
                          @foreach($pedido as $itemPedido)
                          @php
                                $total=$total+$itemPedido[1];
                                @endphp
                          @endforeach
                          

                             <p class="text-center m-0 mb-3 text-white "> Descrição dos itens pedidos totalizando um valor de R$ @php echo number_format($total, 2, ',', '.'); @endphp.</p>
                             
                             @foreach($pedido as $itemPedido)
                              @php
                                $id_produto=$itemPedido[0];
                                $id_produto=$id_produto-1;
                               
                                if(isset($produtos[$id_produto])) {
                                $preco_item = $produtos[$id_produto]['preco_produto'];
                                $nome_item = $produtos[$id_produto]['nome_produto'];

                                } else {
                                   
                                    $preco_item = 0;
                                    $nome_item = 'Erro no sistema';
                                }
                               
                              @endphp

                                  <button class="btn btn-outline-light btn-lg px-4 m-1">{{ $itemPedido[2] }} unidade de @php echo $nome_item; @endphp (R$ @php echo $preco_item; @endphp por un)</button>
                             @endforeach
                             
                             
                          </div>
                          
                          <!-- Status da entrega -->
                          <div class="d-flex mt-3">
                              <div class="w-100 ">
                                  <div class="m-0 " style="background-color:white;">
                                  <p class="text-center m-0 text-dark  ">Status da entrega :</p>
                                  </div>
                              </div>
                          </div>


                          <div class="p-4 " style="background-color: rgba(0, 0, 0,.4);border-radius:0 0 10px 10px;"><!-- Conteudo  -->
                             <p class="text-center m-0 mb-3 text-white ">-> O seu Pedido esta sendo preparado e em poucos minutos sera despachado para entrega 😀.</p>
                             
                             
                          </div>
                          
                      </div>
                      <div class="col-2 p-2">
                          <!-- Div com 25% da largura -->
                          <div class="p-3 text-white" style="background-color: rgba(0,0,0,.4);border-radius:10px;">
                             <button class="btn btn-primary d-block mx-auto mt-3" style="width:180px;">Comprar Novamente </button>
                             <button class="btn btn-primary d-block mx-auto mt-3" style="width:180px;">Entrar em Contato </button>
                             <button class="btn btn-danger d-block mx-auto mt-3"  style="width:180px;">Cancelar Pedido </button>
                          </div>
                      </div>
                  </div>
              </div>
              @endif



                   <!-- HISTORICO DE PEDIDOS -->
                   <div id="disp2" class="my-5 " style="background-color:rgba(255, 255, 255,.3);display:none;"><!-- area1 -->
                        <div class="text-center py-2 bg-primary" ><p class="fs-3 text-dark">Historico de pedidos</p></div>
                        @php $count=0; @endphp
                        @foreach($todos_pedidos as $item_todos_pedidos)
                        <!-- Div com 75% da largura -->
                        @php $data=$item_todos_pedidos[$count][4]; @endphp
                        
                        <p class="text-center text-white mx-auto  mt-3 p-2" style="background-color: rgba(0, 0, 0,.4);border-radius:10px;width:400px"> pedido realizadao em {{ $data }}</p>
                        
                        <div class="d-flex">
                        <div class="col-10 p-2 rounded-5">
                            <!-- Div com 75% da largura -->
                            
                            <div class="p-4 " style="background-color: rgba(0, 0, 0,.4);border-radius:10px;">
                            @php
                            $total=0;
                          @endphp
                          @foreach($item_todos_pedidos as $itemPedido)
                          @php
                                $total=$total+$itemPedido[2];
                                @endphp
                          @endforeach
                          

                             <p class="text-center m-0 mb-3 text-white "> Descrição dos itens pedidos totalizando um valor de R$ @php echo number_format($total, 2, ',', '.'); @endphp.</p>
                             
                             @foreach($item_todos_pedidos as $itemPedido)
                              @php
                                $id_produto=$itemPedido[1];
                                
                                $id_produto=$id_produto-1;
                                
                                if(isset($produtos[$id_produto])) {
                                $preco_item = $produtos[$id_produto]['preco_produto'];
                                $nome_item = $produtos[$id_produto]['nome_produto'];

                                } else {
                                   
                                    $preco_item = 0;
                                    $nome_item = 'Erro no sistema';
                                }
                               
                              @endphp

                                  <button class="btn btn-outline-light btn-lg px-4 m-1">{{ $itemPedido[3] }} unidade de @php echo $nome_item; @endphp (R$ @php echo $preco_item; @endphp por un)</button>
                             @endforeach
                               
                            </div>
                            
                            
                            
                        </div>
                        <div class="col-2 p-2">
                            <!-- Div com 25% da largura -->
                            <div class="p-3 text-white" style="background-color: rgba(0,0,0,.4);border-radius:10px;">
                             <button class="btn btn-primary d-block mx-auto mt-3" style="width:180px;">Comprar Novamente </button>
                             <button class="btn btn-primary d-block mx-auto mt-3" style="width:180px;">Entrar em Contato </button>
                             
                            </div>
                        </div>
                        
                    </div>
                    <hr class="w-100" style="background-color:white;font-size:1px;">
                    @endforeach
                   
                </div>
                       
             
        


                      
                  
            </div>
            
        </header>

     


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

  <script>

    function selectDisplay1() {
                document.getElementById("disp1").style.display = "block";
                document.getElementById("disp2").style.display = "none";
               
            }
            function selectDisplay2() {
                document.getElementById("disp1").style.display = "none";
                document.getElementById("disp2").style.display = "block";
              
            }


    function changeColor(element, color, menuId, stat) {
        element.style.backgroundColor = color;
		
		var menu = document.getElementById(menuId);
		
		if(stat==0){ menu.style.display = 'block';}
		if(stat==1){menu.style.display = 'none';}
    }
	function CorSimples(element, color) {
        element.style.backgroundColor = color;
		
		
    }
    function alternarVisibilidade() {
        var div = document.getElementById('menulista');

        if (div.style.display === 'none' || div.style.display === '') {
            div.style.display = 'block';
			var meuItem = document.getElementById('lista');
        meuItem.innerHTML = 'Minimizar Carrinho';
        } else {
            div.style.display = 'none';
			var meuItem = document.getElementById('lista');
        meuItem.innerHTML = 'Expandir Carrinho';
        }
    }

    function divNone(div){
      var div = document.getElementById(div);
      div.style.display = 'none';
      var dinheiro = document.getElementById('dinheiro');
      dinheiro.style.display = 'block';
    }
    function divBlock(div){
      var div = document.getElementById(div);
      div.style.display = 'block';
      var dinheiro = document.getElementById('dinheiro');
      dinheiro.style.display = 'none';
    }

	function flash(element){
		var color=element.style.backgroundColor;
	    
  
		
		
		element.style.backgroundColor = 'white';
		element.style.transition = 'background-color 0.5s ease';
		
		setTimeout(function() {
			element.style.backgroundColor = color;
		}, 500);
	}

	function flashId(id){
		var div=document.getElementById('menulista');
		var color=div.style.backgroundColor;
	   
		div.style.backgroundColor = 'white';
		div.style.transition = 'background-color 0.5s ease';
		
		setTimeout(function() {
			div.style.backgroundColor = color;
		}, 500);
	}

	function dinamic_carrinho(id,qnt, param) {
    
    // Manda mensagem para inserir o id ou deletar o id no carrinho
    // Retorna a mensagem dizendo que cadastrou ou deletou o id
    // Realiza a atualização do carrinho

    function adicionar_produto(id,qnt) {
		
        var xhr = new XMLHttpRequest();
        var url = '{{route('carrinho.add')}}';
        var respostaDoServidor = "";
		
        // Configurando a requisição
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		// Obter o token CSRF da tag meta
		var token = document.head.querySelector('meta[name="csrf-token"]').content;

		// Adicionar o token CSRF ao cabeçalho da requisição
		xhr.setRequestHeader('X-CSRF-TOKEN', token);
		

        // Função a ser chamada quando a requisição for concluída
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                // A requisição foi bem-sucedida
                respostaDoServidor = xhr.responseText;
                console.log(respostaDoServidor);

                
            } else {
				
                // Houve um erro na requisição
                console.error('Erro na requisição. Status:', xhr.status, xhr.statusText);
            }
        };

        // Enviando a requisição com o parâmetro id
        // xhr.send('id=' + encodeURIComponent(id));
		// Chamada para enviar o id
		xhr.send('id=' + encodeURIComponent(id)+'&qnt=' + encodeURIComponent(qnt));
    }

	function diminuir_produto(id,qnt) {
		
        var xhr = new XMLHttpRequest();
        var url = '{{route('carrinho.diminuir')}}';
        var respostaDoServidor = "";
		
        // Configurando a requisição
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		// Obter o token CSRF da tag meta
		var token = document.head.querySelector('meta[name="csrf-token"]').content;

		// Adicionar o token CSRF ao cabeçalho da requisição
		xhr.setRequestHeader('X-CSRF-TOKEN', token);
		

        // Função a ser chamada quando a requisição for concluída
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                // A requisição foi bem-sucedida
                respostaDoServidor = xhr.responseText;
                console.log(respostaDoServidor);

                
            } else {
				
                // Houve um erro na requisição
                console.error('Erro na requisição. Status:', xhr.status, xhr.statusText);
            }
        };

        // Enviando a requisição com o parâmetro id
        // xhr.send('id=' + encodeURIComponent(id));
		// Chamada para enviar o id
		xhr.send('id=' + encodeURIComponent(id)+'&qnt=' + encodeURIComponent(qnt));
    }

    function deletar_produto(id) {
        // Lógica para deletar produto
		var xhr = new XMLHttpRequest();
        var url = '{{route('carrinho.del')}}';
        var respostaDoServidor = "";
		
        // Configurando a requisição
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		// Obter o token CSRF da tag meta
		var token = document.head.querySelector('meta[name="csrf-token"]').content;

		// Adicionar o token CSRF ao cabeçalho da requisição
		xhr.setRequestHeader('X-CSRF-TOKEN', token);
		

        // Função a ser chamada quando a requisição for concluída
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                // A requisição foi bem-sucedida
                respostaDoServidor = xhr.responseText;
                console.log(respostaDoServidor);
				
                
            } else {
				
                // Houve um erro na requisição
                console.error('Erro na requisição. Status:', xhr.status, xhr.statusText);
            }
        };

        // Enviando a requisição com o parâmetro id
        // xhr.send('id=' + encodeURIComponent(id));
		// Chamada para enviar o id
		xhr.send('id=' + encodeURIComponent(id));
    }

    function mostrar_produtos() {
        // Lógica para mostrar produtos
       
		var xhr = new XMLHttpRequest();
        var url = '{{route('carrinho.mostrar')}}';
        var respostaDoServidor = "";
		
        // Configurando a requisição
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		// Obter o token CSRF da tag meta
		var token = document.head.querySelector('meta[name="csrf-token"]').content;

		// Adicionar o token CSRF ao cabeçalho da requisição
		xhr.setRequestHeader('X-CSRF-TOKEN', token);
		

        // Função a ser chamada quando a requisição for concluída
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                
                respostaDoServidor = xhr.responseText;
                
				var minhaDiv = document.getElementById('tabelaCarrinho');var a=0;
				var saida = JSON.parse(respostaDoServidor);var tabGrafico='';

				var valorTotal=0;var quantidadeTotal=0;
				


				saida.forEach(function(item) {
					var nomePizza    = item.nome_produto;
					var descricao    = item.descricao_produto;
					var precoProduto = item.preco_produto;
					var precoNumerico = parseFloat(precoProduto);

					var quantidade   = item.quantidade;
					var quantidadeNumerico = parseFloat(quantidade);
					var idProduto    = item.id_produto;
					var foto         = item.foto_produto;
          var valorTotalProduto=quantidadeNumerico*precoNumerico;

          valorTotalProduto = parseFloat(valorTotalProduto.toFixed(2));
				  valorTotalProduto = valorTotalProduto.toFixed(2);

					quantidadeTotal=quantidadeTotal+quantidadeNumerico;
					valorTotal=valorTotal+(precoNumerico*quantidadeNumerico);	
							
				var modelo = `
				<li class="m-3">
					<div class="pricing-entry d-flex ">
					<div class="img" style="background-image: url(${foto});"></div>
					<div class="desc pl-3">
						<div class="d-flex text align-items-center">
						<h3><span>${nomePizza}</span></h3>
						</div>
						<span class="bg-white rounded text-dark p-1 px-1 mr-1" style="font-size:15px;float:right;">Total R$: ${valorTotalProduto}</span>
            <span class="bg-white rounded text-dark p-1 mr-1" style="font-size:15px;float:right;width:80px;">Qnt: ${quantidade}</span>
						<span class="bg-white rounded text-dark p-1 px-1 mr-1" style="font-size:15px;float:right;">Unidade R$: ${precoProduto}</span>
					</div>
					</div>
				</li>
				
				`;
				tabGrafico=tabGrafico+modelo;
				a++;
				});
				
				valorTotal = parseFloat(valorTotal.toFixed(2));
				valorTotal = valorTotal.toFixed(2);

				document.getElementById('valorTotal').textContent="R$: "+valorTotal;
			//	quantidadeTotal=parseFloat(quantidadeTotal.toFixed(2));
			//	document.getElementById('quantidadeTotal').textContent= quantidadeTotal;
				
				minhaDiv.innerHTML = tabGrafico;

                
            } else {

				
                // Houve um erro na requisição
                console.error('Erro na requisição. Status:', xhr.status, xhr.statusText);
            }
        };

        // Enviando a requisição com o parâmetro id
        // xhr.send('id=' + encodeURIComponent(id));
		// Chamada para enviar o id
		xhr.send('id=' + encodeURIComponent(id));
    }



    if (param === 'add') {
        adicionar_produto(id,qnt);
    
        ;mostrar_produtos(id);
    }
	if (param === 'diminuir') {
        diminuir_produto(id,qnt);
    
        ;mostrar_produtos(id);
    }
    if (param === "del") {
        deletar_produto(id);
        
        mostrar_produtos(id);
    }
    if (param === "atualizar") {
		mostrar_produtos(id);
    }
}


	
window.onload = dinamic_carrinho(0,0, "atualizar");
</script>

@endsection


{{-- modelo de dados == {{ $dadosModel[0] }} --}}
 
