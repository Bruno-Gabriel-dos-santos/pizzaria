
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

@section('title','Pagamento')

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
            <li class="nav-item "><a href="meusPedidos" class="nav-link">Meus Pedidos</a></li>
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
    <br><br><h1 class="text-center fs-1">Pagamento</h1><p class="breadcrumbs text-center" style="font-size: 50px;cursor: pointer;">⌄</p><br><br>
 
      

      <div class="container-wrap d-flex flex-wrap " style="min-width: 660px;width:90%;margin-left:5%;">
          
          <div class="box mt-3 mx-auto" style="min-width: 460px; width: 50%;border: 1px solid white;border-radius: 0 0 0 10px;">
              <h3 class="text-right mr-5  mt-3 mb-4">Produtos Selecionados :</h3>
              <div style="height:1px;background-color:white;"></div>
                    <div style="transition: opacity 0.7s ease, height 0.7s ease;margin:auto;height: 540px;min-width: 440px;color: #fff;
                              text-align: center; z-index: 998;min-width:300px; overflow-y: scroll;" id="menulista"> 
                        <ul class="list-unstyled mt-3" id="tabelaCarrinho">

                        </ul>
                  </div>
          </div>




          <div class="box bg-white pb-3 mt-3 mx-auto" style="min-width: 460px; width: 50%;border-radius: 0 0 10px 0;">
              <h3 class="text-left ml-5 mt-3 mb-4 text-dark" style="float:left:">Prosseguir a compra :</h3>
            
              
              <div  id="meuPedido" style="width:90%;margin:auto;background-color:rgb(180,180,180);">
                <p class="text-dark ml-5 pt-1 pb-1 ">Meu pedido<span style="font-size: 25px;color:black;">⌄</span></p>

                <div id="meuPedido" style="background-color:rgb(140,140,140);">
                  <div>
                    <br>
                    <h5 class="text-white text-center p-1">Confira Os Itens ao lado , o valor total e clique em prosseguir</h5>

                    <h5 class="text-white text-center">Valor Total da compra <span class="text-dark bg-white rounded p-1" id="valorTotal"></span></h5>

                  </div>
                  <button class="btn btn-primary m-3" onclick="pagamento()">Prosseguir para Meios de Pagamento</button>
                </div>
              </div>



              <div  id="meiosDePagamento" style="width:90%;margin:auto;background-color:rgb(180,180,180);display:none;">
                <p class="text-dark ml-5 pt-1 pb-1 ">Selecione a Forma de Pagamento<span style="font-size: 25px;color:black;">⌄</span></p>

                <div  style="background-color:rgb(140,140,140);">
                  <div >
                    <br>
                    <h5 class="p-1 text-white text-center mt-3" >Selecione o meios de pagamento e insira os dados necessarios</h5>

                    <div id="tiposDePagamento"  style="display:flex;width:90%;margin-left:5%;">
                        <button id="bot0" class="text-white btn btn-primary mx-3" onclick="divBlock('cartao'),botaoPrimary('bot0')" > Cartão</button>
                        <button id="bot1" class="text-white btn btn-secondary mx-3" onclick="divBlock('cartao'),botaoPrimary('bot1')"> Debito</button>
                        <button id="bot2" class="text-white  btn btn-secondary mx-3" onclick="divNone('cartao'),botaoPrimary('bot2')" > Dinheiro</button>
                    </div>

                    <div class="bg-secondary p-3 mt-3 mx-auto" style="min-width:350px;width:90%;border-radius:10px;" id="cartao">
                        <h4 class="ml-3 p-1" style="background-color:rgba(255,255,255,.2);border-radius:5px;width:300px;">Insira os dados do Cartão</h4>
                        <form class=" mt-3 mx-auto" style="min-width:350px;width:90%;">
                            <input type="text" class="my-2 p-1 w-100" placeholder="nome" style="background-color:rgba(255,255,255,.2);border:none;outline:none; border-radius:10px;">
                            <input type="text" pattern="[0-9]*" inputmode="numeric" class="my-2 p-1  w-100" placeholder="numeroCartao" style="background-color:rgba(255,255,255,.2);border:none;outline:none; border-radius:10px;">
                            <input type="text" pattern="[0-9]*" inputmode="numeric" class="my-2 p-1  w-100" placeholder="cvv" style="background-color:rgba(255,255,255,.2);border:none;outline:none; border-radius:10px;">
                            <input type="text" pattern="[0-9]*" maxlength="2" inputmode="numeric" class="my-2 p-1  w-100" placeholder="Validade Mes" style="background-color:rgba(255,255,255,.2);border:none;outline:none; border-radius:10px;">
                            <input type="text" pattern="[0-9]*" maxlength="2" inputmode="numeric" class="my-2 p-1  w-100" placeholder="Validade Ano" style="background-color:rgba(255,255,255,.2);border:none;outline:none; border-radius:10px;">
                            
                          
                          
                        </form>

                    </div>

                   <div id="dinheiro" class="bg-secondary mx-auto rounded" style="display:none;min-width:350px;width:90%;">
                      <p class="text-white p-3 m-3"> Ao selecionar pagamento em dinheiro voce pagara em dinheiro especie na hora do recebimento de sua encomenda, caso tenha um valor nota maior do que o pedido insira o valor total para prepararmos o seu troco 🤗</p>
                      <form class=" mt-3 mx-auto" style="min-width:350px;width:90%;">
                          <input type="text" class="my-2 p-1 w-100" placeholder="Valor total caso necessario para troco" style="background-color:rgba(255,255,255,.2);border:none;outline:none; border-radius:10px;">
                      </form>

                      </div>
                  </div>
                  <button class="btn btn-secondary m-3" onclick="meuPedido()">Voltar</button>
                  <button class="btn btn-primary m-3" onclick="localEntrega()">Prosseguir para Endereço de Entrega</button>
                </div>
              </div>


              <div  id="localDaEntrega" style="width:90%;margin:auto;background-color:rgb(180,180,180);display:none;">
                <p class="text-dark ml-5 pt-1 pb-1 ">Selecione o local da Entrega<span style="font-size: 25px;color:black;">⌄</span></p>

                <div style="background-color:rgb(140,140,140);">
                  <div>
                    <br>
                    <h5 class="text-white p-1 text-center">Confira os dados Cadastrados do local de Entrega</h5>

                    <p class="text-white p-2 bg-secondary" style="width:90%;margin-left:5%;border-radius:5px;">Nome do Comprador : {{ $dados['nome'] }}</p>
                    <p class="text-white p-2 bg-secondary" style="width:90%;margin-left:5%;border-radius:5px;">Numero Telefone : {{ $dados['numero_telefone'] }}</p>
                    <p class="text-white p-2 bg-secondary" style="width:90%;margin-left:5%;border-radius:5px;">Endereço de Entrega : {{ $dados['endereco'] }}</p>
                    <p class="text-white p-2 bg-secondary" style="width:90%;margin-left:5%;border-radius:5px;">Numero do Endereço: {{ $dados['numero_end'] }}</p>

                  </div>
                  <button class="btn btn-secondary m-3" onclick="pagamento()">Voltar</button>
                  <a href="{{ route('meusPedidos.cadastro') }}" class="btn btn-success text-white m-3" >Realizar Pedido</a>
                </div>
              </div>
              
             
              
          </div>
      </div>





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

function meuPedido() {
    document.getElementById('meiosDePagamento').style.display = 'none';
    document.getElementById('localDaEntrega').style.display = 'none';
    document.getElementById('meuPedido').style.display = 'block';
}

function pagamento() {
    document.getElementById('meiosDePagamento').style.display = 'block';
    document.getElementById('localDaEntrega').style.display = 'none';
    document.getElementById('meuPedido').style.display = 'none';
}

function localEntrega() {
    document.getElementById('meiosDePagamento').style.display = 'none';
    document.getElementById('localDaEntrega').style.display = 'block';
    document.getElementById('meuPedido').style.display = 'none';
}


    function botaoPrimary(id){
      var botId = document.getElementById(id);
      var button0 = document.getElementById('bot0');
      var button1 = document.getElementById('bot1');
      var button2 = document.getElementById('bot2');
      // Remove a classe btn-primary
      button0.classList.remove('btn-primary');
      button1.classList.remove('btn-primary');
      button2.classList.remove('btn-primary');

      button0.classList.add('btn-secondary');
      button1.classList.add('btn-secondary');
      button2.classList.add('btn-secondary');
      // Adiciona a classe btn-secondary
      botId.classList.remove('btn-secondary');
      botId.classList.add('btn-primary');
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
 