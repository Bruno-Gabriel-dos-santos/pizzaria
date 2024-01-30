
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

@section('title','Catalogo')




@section('content')

@auth

<div class="catalogo1" id="menulista"> 
		<h4 class="text-center mt-3">🍕 Lista Carrinho 🍕<h4>
		<div class="w-75 mx-auto catalogo2" ></div>
		<ul class="list-unstyled mt-3" id="tabelaCarrinho">

		</ul>


</div>



<div class="catalogo3"> 
	<div class="container">

		
		<!-- Lista horizontal -->
		<ul class="list-inline text-center">
			<li class="list-inline-item m-1">Total : <span class="bg-white rounded text-dark p-1" id="valorTotal">R$: 0.00</span></li>
			<li class="list-inline-item m-1">Itens : <span class="bg-white rounded text-dark p-1" id="quantidadeTotal">0</span></li>
			<li class="list-inline-item p-1 catalogo4" id="lista" onmouseenter="changeColor(this, '#ffffff')" onmouseleave="changeColor(this, '#dddddd')" onclick="alternarVisibilidade(),dinamic_carrinho('0',null, 'atualizar')">Expandir Carrinho</li>
			<li class="list-inline-item p-2 catalogo5" onmouseenter="changeColor(this, '#4CAF50')" onmouseleave="changeColor(this, '#45a049')" ><a href="pagamento">Finalizar Compra</a></li>
		</ul>
	</div>

</div>
@endauth

	

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="z-index: 999;"> 
	    <div class="container">
	      <a class="navbar-brand" href="home"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Pizza</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>Catalogo
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
	          <li class="nav-item  active"><a href="catalogo" class="nav-link">Catalogo</a></li>
	          <li class="nav-item"><a href="sobre" class="nav-link">Sobre</a></li>
	          <li class="nav-item"><a href="contato" class="nav-link">Contato</a></li>
			  @auth
			  <li class="nav-item"><a href="meusPedidos" class="nav-link">Meus Pedidos</a></li>
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

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Nosso Catalogo</h1>
	            <a href="#display-1" class="breadcrumbs" style="font-size: 50px;cursor: pointer;">⌄</a>
            </div>

          </div>
        </div>
      </div>
    </section>
    
		<section class="ftco-section" id="display-1">
    	

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Confira nossas pizzas</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">
				Saboreie. Encante-se. Pizzapizza, irresistível.</p>
          </div>
        </div>
        <div class="row">

        	<div class="col-md-6" >
			@php
			$cont=0;
			@endphp
			@foreach ($pizzas as $pizza)
			@php
			if($cont==0){$cont=1;}else{$cont=0;}
			@endphp

				@if($cont==0)
				<a onclick="dinamic_carrinho('{{ $pizza[0] }}',1,'add')" style="cursor:pointer;">
        		<div class="pricing-entry d-flex ftco-animate p-1 rounded" id="id{{ $pizza[0] }}" onclick="flash(this)"  onmouseenter="changeColor(this, 'rgba(255,255,255,.35)','{{ $pizza[0] }}',0);" onmouseleave="changeColor(this, 'rgba(0,0,0,0)','{{ $pizza[0] }}',1);">
				<div class="d-flex align-items-center fixed-top" style="height: 100%;">
					<div class="mx-auto text-center" id="{{ $pizza[0] }}" style="display:none;">
							<p class="p-1 rounded text-dark" style="background-color:rgba(255,255,255,0.75)">Adicionar ao Carrinho</p>
						</div>
					</div>
					<div class="img" style="background-image: url('{{ $pizza[1] }}');"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span class="rounded p-1">{{ $pizza[2] }}</span></h3>
	        				<span class="price rounded p-1">{{ $pizza[3] }}</span>
	        			</div>
	        			<div class="d-block">
	        				<p>{{ $pizza[4] }}</p>
	        			</div>
        			</div>
        		</div>
				</a>
				@endif
			@endforeach	
        		
        	</div>

        	<div class="col-md-6">
			
			@php
			$cont=0;
			@endphp
			@foreach ($pizzas as $pizza)
			@php
			if($cont==0){$cont=1;}else{$cont=0;}
			@endphp

				@if($cont==1)
			
				<a onclick="dinamic_carrinho('{{ $pizza[0] }}',1,'add')" style="cursor:pointer;">
        		<div class="pricing-entry d-flex ftco-animate p-1 rounded" id="id{{ $pizza[0] }}" onclick="flash(this)" onmouseenter="changeColor(this, 'rgba(255,255,255,.35)','{{ $pizza[0] }}',0);" onmouseleave="changeColor(this, 'rgba(0,0,0,0)','{{ $pizza[0] }}',1);">
				<div class="d-flex align-items-center fixed-top" style="height: 100%;">
					<div class="mx-auto text-center" id="{{ $pizza[0] }}" style="display:none;">
							<p class="p-1 rounded text-dark" style="background-color:rgba(255,255,255,0.75)">Adicionar ao Carrinho</p>
						</div>
					</div>
					<div class="img" style="background-image: url('{{ $pizza[1] }}');"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span class="rounded p-1">{{ $pizza[2] }}</span></h3>
	        				<span class="price rounded p-1">{{ $pizza[3] }}</span>
	        			</div>
	        			<div class="d-block">
	        				<p>{{ $pizza[4] }}</p>
	        			</div>
        			</div>
        		</div>
				</a>
				@endif
			@endforeach	
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		
	    		<div class="col-lg-8 ftco-animate p-md-5 mx-auto">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">BEBIDAS</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">BURGUERS</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">BATATAS</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">DOCES</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">

							@foreach($bebidas as $bb)

		              		<div class="col-md-4 text-center rounded p-1" id="id{{ $bb[0] }}" onmouseenter="changeColor(this, 'rgba(255,255,255,.35)','{{ $bb[0] }}',3);" onmouseleave="changeColor(this, 'rgba(0,0,0,0)','{{ $bb[0] }}',3);">
							  
								<div class="menu-wrap text-white">
									
		              				<a class="menu-img img mb-4" style="background-image: url({{ $bb[1] }});"></a>
		              				<div class="text">
									  	
		              					<h3><a >{{ $bb[2] }}</a></h3>
		              					<p>{{ $bb[4] }}</p>
		              					<p class="price"><span> R$ : {{ $bb[3]}}</span></p>
		              					<p><a onclick="dinamic_carrinho('{{ $bb[0] }}',1,'add'),flash(id{{ $bb[0] }})"  class="btn btn-white btn-outline-white" >Adicionar ao carrinho</a></p>
		              				</div>
		              			</div>
		              		</div>
							 @endforeach
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		
								@foreach($burguer as $bb)

								<div class="col-md-4 text-center rounded p-1" id="id{{ $bb[0] }}" onmouseenter="changeColor(this, 'rgba(255,255,255,.35)','{{ $bb[0] }}',3);" onmouseleave="changeColor(this, 'rgba(0,0,0,0)','{{ $bb[0] }}',3);">

								<div class="menu-wrap text-white">
									
										<a class="menu-img img mb-4" style="background-image: url({{ $bb[1] }});"></a>
										<div class="text">
											
											<h3><a >{{ $bb[2] }}</a></h3>
											<p>{{ $bb[4] }}</p>
											<p class="price"><span> R$ : {{ $bb[3]}}</span></p>
											<p><a onclick="dinamic_carrinho('{{ $bb[0] }}',1,'add'),flash(id{{ $bb[0] }})" class="btn btn-white btn-outline-white">Adicionar ao carrinho</a></p>
										</div>
									</div>
								</div>
								@endforeach
		              		
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		
								@foreach($batata as $bb)

								<div class="col-md-4 text-center rounded p-1" id="id{{ $bb[0] }}" onmouseenter="changeColor(this, 'rgba(255,255,255,.35)','{{ $bb[0] }}',3);" onmouseleave="changeColor(this, 'rgba(0,0,0,0)','{{ $bb[0] }}',3);">

								<div class="menu-wrap text-white">
									
										<a class="menu-img img mb-4" style="background-image: url({{ $bb[1] }});"></a>
										<div class="text">
											
											<h3><a >{{ $bb[2] }}</a></h3>
											<p>{{ $bb[4] }}</p>
											<p class="price"><span> R$ : {{ $bb[3]}}</span></p>
											<p><a onclick="dinamic_carrinho('{{ $bb[0] }}',1,'add'),flash(id{{ $bb[0] }})" class="btn btn-white btn-outline-white">Adicionar ao carrinho</a></p>
										</div>
									</div>
								</div>
								@endforeach



		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
						
								@foreach($doces as $bb)

								<div class="col-md-4 text-center rounded p-1" id="id{{ $bb[0] }}" onmouseenter="changeColor(this, 'rgba(255,255,255,.35)','{{ $bb[0] }}',3);" onmouseleave="changeColor(this, 'rgba(0,0,0,0)','{{ $bb[0] }}',3);">

								<div class="menu-wrap text-white">
									
										<a class="menu-img img mb-4" style="background-image: url({{ $bb[1] }});"></a>
										<div class="text">
											
											<h3><a >{{ $bb[2] }}</a></h3>
											<p>{{ $bb[4] }}</p>
											<p class="price"><span> R$ : {{ $bb[3]}}</span></p>
											<p><a onclick="dinamic_carrinho('{{ $bb[0] }}',1,'add'),flash(id{{ $bb[0] }})" class="btn btn-white btn-outline-white">Adicionar ao carrinho</a></p>
										</div>
									</div>
								</div>
								@endforeach





		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

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
						<span class="bg-white rounded text-dark p-1 px-2" style="font-size:20px;float:left;">R$:${precoProduto}</span>
						<span style="float:right;margin-right:15px;">
						<span class="bg-white rounded text-dark p-1 mr-1" style="font-size:20px;float:left;width:80px;">Qnt: ${quantidade}</span>
						<span class=" rounded-left text-dark p-1 pl-2" style="font-size:20px;float:left;background-color: #d2d2d2;cursor:pointer;width:30px;" onmouseenter="CorSimples(this, '#ffffff')" onmouseleave="CorSimples(this, '#d2d2d2')" onclick="dinamic_carrinho(${idProduto},1,'add')">+</span>
						<span class=" rounded-right text-dark p-1 mr-1 pr-2" style="font-size:20px;float:left;background-color: #d2d2d2;cursor:pointer;width:30px;" onmouseenter="CorSimples(this, '#ffffff')" onmouseleave="CorSimples(this, '#d2d2d2')" onclick="dinamic_carrinho(${idProduto},1,'diminuir')">-</span>
						<button onclick="dinamic_carrinho(${idProduto}, 5, 'del')" class="btn btn-danger">Remover</button>
						</span>
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
				quantidadeTotal=parseFloat(quantidadeTotal.toFixed(2));
				document.getElementById('quantidadeTotal').textContent= quantidadeTotal;
				
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
 