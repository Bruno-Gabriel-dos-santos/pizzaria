
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

@section('title','Sobre')

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
	          <li class="nav-item  active"><a href="sobre" class="nav-link">Sobre</a></li>
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
            	<h1 class="mb-3 mt-5 bread">Sobre</h1>
	            <a href="#display-1" class="breadcrumbs" style="font-size: 50px;cursor: pointer;">⌄</a>
            </div>

          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-intro" id="display-1">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>(11) 94411-9900</h3>
								<h3>(11) 98711-9600</h3>
	    						<p>telefone-whatsApp</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Rua São João N-999</h3>
	    						<p>Unidade Mogi das Cruzes</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Aberto de terça a domingo</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Conheça a <span class="flaticon-pizza">Pizza</span> unidade Mogi.</h2>
        </div>
        <div>
  				<p>
					Bem-vindo ao mundo irresistível da Pizzapizza, uma pizzaria que se destaca como um verdadeiro ícone de tradição e qualidade em Mogi. Fundada em 2004 por Leon de la Lune, um apaixonado por pizza que trouxe consigo os segredos da autêntica culinária italiana desde os anos 90.

Nossa história começa em uma pequena cidade na Itália, onde Leon foi criado em uma família tradicional, imerso na arte de fazer pizzas ao lado de seu habilidoso pai. A tradição e a paixão pela culinária italiana foram trazidas para Mogi, transformando-se na base sólida da Pizzapizza.

Desde o início, comprometemo-nos a oferecer o melhor em qualidade. Nossos ingredientes são cuidadosamente selecionados, priorizando sempre opções orgânicas e o máximo frescor. Na Pizzapizza, acreditamos que cada pedaço deve ser uma experiência autêntica, e isso reflete-se na escolha cuidadosa dos insumos para criar sabores que encantam o paladar.

Leon de la Lune não apenas trouxe consigo a tradição da autêntica pizza italiana, mas também incorporou toques modernos e rústicos ao ambiente da pizzaria. O espaço foi cuidadosamente decorado para proporcionar aos nossos clientes uma atmosfera acolhedora e convidativa. Aqui, a mistura de elementos tradicionais e contemporâneos cria um local perfeito para desfrutar de momentos especiais com amigos e familiares.

Na Pizzapizza, acreditamos que cada pizza é uma obra de arte, e nosso compromisso com a excelência é evidente em cada detalhe. Sinta-se em casa, desfrute de uma deliciosa experiência gastronômica e descubra por que somos reconhecidos como a melhor pizzaria da cidade.

Venha fazer parte da nossa tradição, onde a paixão pela pizza encontra a excelência em cada pedaço. Pizzapizza, onde a qualidade e a tradição se encontram para criar momentos inesquecíveis.
				</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nossa Equipe</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">
				Na Pizzapizza, nossa equipe é o segredo por trás da qualidade excepcional que oferecemos. Sob a liderança do fundador, Leon de la Lune, nossos pizzaiolos talentosos e comprometidos transformam cada pizza em uma obra-prima, equilibrando ingredientes frescos e orgânicos. Com uma equipe dedicada e atenciosa, garantimos não apenas deliciosas experiências gastronômicas, mas também um serviço impecável, tornando cada visita à Pizzapizza memorável e acolhedora.
			</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Leon de la Lune</a></h3>
      					<span class="position">Gerente Chefe</span>
      					<div class="text">
	        				<p>Em 2004, Leon de la Lune, apaixonado pela arte da pizza desde a Itália nos anos 90, deu vida à Pizzapizza em Mogi. Uma jornada de sabor e tradição começava.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Claudio Sorat</a></h3>
      					<span class="position">Barista-chefe</span>
      					<div class="text">
	        				<p>
								Expecialista em bebidas e tematica Claudio é um apaixonado por culinaria desde pequeno onde começou sua formação ainda jovem, trabalhando conosco desde a inalguração da pizzapizza.
							</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Chef-Mestre</span>
      					<div class="text">
	        				<p>
								Com vasta esperiencia em pizza vinda da italia Patrick é um membro renomado de nossa equipe. Suas expecialidades com massas e recheios artesanias trazem vida as nossas pizzas. 
							</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Confeiteiro</span>
      					<div class="text">
	        				<p>
								Especialisa em bolos e doces Ivan é responsavel por criar todas as sobremesas que temos na pizzapizza. Um profissional cheio de criatividade e empenho em criar doces e bolos saborosos.
							</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Pizza Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Staff</span>
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




@endsection


{{-- modelo de dados == {{ $dadosModel[0] }} --}}
 