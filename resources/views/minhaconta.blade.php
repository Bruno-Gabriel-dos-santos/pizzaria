
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

@section('title','Minha Conta')

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
            <li class="nav-item"><a href="meusPedidos" class="nav-link">Meus Pedidos</a></li>
            <li class="nav-item active"><a href="minhaconta" class="nav-link">Minha Conta</a></li>
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
    <br><br><h1 class="text-center fs-1">Minha conta PizzaPizza</h1><br>

    <header class="py-5" style="">
            
              
              <div class="mx-auto" style="width:90%;">
                   
                    
            
              <!-- MEUS DADOS -->
              <div id="disp3" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;"><!-- area1 -->
                        <div class="text-center py-2 bg-primary" ><p class="fs-3 text-dark">Meus Dados</p></div>
                        <!-- Div com 75% da largura -->
                        

                        <div class="card-body mx-auto text-white mt-3" style="width:90%;">
                        <form action="{{route('minhacontaUpdate')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nome">Nick:</label>
                            <input type="text" class="form-control" name="nick" id="nick" value="{{ $dados[0] }}" placeholder="Digite o nick">
                        </div>
                        @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $dados[1] }}" placeholder="Digite o nome">
                        </div>
                        @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="{{ $dados[2] }}" placeholder="Digite o sobrenome">
                        </div>
                        @error('sobrenome')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="numero_telefone">Número de Telefone:</label>
                            <input type="text" class="form-control" name="numero_telefone" id="numero_telefone" value="{{ $dados[3] }}" placeholder="Digite o número de telefone">
                        </div>
                        @error('numero_telefone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" value="{{ $dados[4] }}" placeholder="Digite o CPF">
                        </div>
                        @error('cpf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $dados[5] }}" placeholder="Digite o email">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" value="{{ $dados[6] }}" placeholder="Digite o endereço">
                        </div>
                        @error('endereco')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="numero_end">Número do Endereço:</label>
                            <input type="text" class="form-control" name="numero_end" id="numero_end" value="{{ $dados[7] }}" placeholder="Digite o número do endereço">
                        </div>
                        @error('numero_end')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        
                        

                            <div class="form-group mt-3">
                            <div class="g-recaptcha" data-sitekey="6LfOec0mAAAAAAw1vC6u38wPMQYGJGWxzy0etuiC"></div>
                            </div>
                            
                            <button type="submit" class="btn btn-danger mt-2">modificar</button>
                            
                        </form>
                        
                        </div>


                        
                    
              </div>
              
          </header>

          
            
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->



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
 