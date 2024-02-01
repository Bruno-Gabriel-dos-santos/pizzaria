
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

@section('title','Home')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="home"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>PIzza</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="home" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="catalogo" class="nav-link">Catalogo</a></li>
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
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Delicious</span>
              <h1 class="mb-4">Italian Cuizine</h1>
              <p class="mb-4 mb-md-5">Molhos artezanais feitos a moda Italiana para o Maximo sabor.</p>
			
			  <a href="#display-1" class="breadcrumbs" style="font-size: 50px;cursor: pointer;">⌄</a>
			</div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_1.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" >
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Crunchy</span>
              <h1 class="mb-4">Italian Pizza</h1>
              <p class="mb-4 mb-md-5">Uma pizza de massa fina e crocante para voce se deliciar hoje.</p>
              <p><a href="catalogo" class="btn btn-primary p-3 px-xl-4 py-xl-3">Comprar</a> <a href="catalogo" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Catalogo</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Bem vindo a pizza-pizza</span>
              <h1 class="mb-4">Onde é feita a pizza dos seus sonhos</h1>
              <p class="mb-4 mb-md-5">Uma mistura de tradição e igredientes selecionados que lhe produz a melhor pizza que o ser humano ja conheceu.</p>
              <p><a href="catalogo" class="btn btn-primary p-3 px-xl-4 py-xl-3">Comprar</a> <a href="catalogo" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Catalogo</a></p>
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
  				<p>Venha vivenciar o sabor autêntico da Pizzapizza em Mogi! Fundada por Leon de la Lune em 2004,
					 nossa pizzaria é uma celebração da tradição italiana. Com ingredientes orgânicos e uma equipe dedicada,
					  cada fatia é uma obra-prima. Nosso ambiente harmoniza o rústico com o moderno,
					   criando um espaço acolhedor para desfrutar momentos especiais.
					    Deixe-se envolver pela paixão pela pizza e experimente a excelência em cada pedaço.
						 Visite-nos e descubra por que somos a escolha definitiva para os amantes da boa comida em Mogi.
						  Sua jornada gastronômica começa aqui na Pizzapizza. </p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nossa Especialidade.</h2>
            <p>Somos especialistas em massas finas e crocantes, recheios temperados e suculentos alem de fazermos nossos envios embalagens personalizadas para cada epoca do ano assim sempre garantindo que a pizza chegue perfeita.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Igredientes Frescos</h3>
                <p>Utilizamos sempre igredientes frescos e organicos que adquirimos de forncedores confiaveis e de longa data, acreditamos no poder de nossa comunidade e participamos ativamente no meio produtor.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Entregas a Jato</h3>
                <p>Temos um dos sistemas de entrega mais rapido da cidade graças ao nosso sistemas de rotas por gps e nossos entregadores treinados.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Embalagens Custom</h3>
                <p>Utilizamos embalagens customizadas para a epoca do ano garantido que a pizza chegue quentinha no inverno e não cozinhe no verão.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Pizzas Mais Pedidas</h2>
            <p>Algumas de nossas pizzas com mais saida na casa, experimente massas finas e crocantes com recheios cheios de sabor e intensidade para alegrar sua semana.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="catalogo" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>Italian Pizza</h3>
    						<p>Deliciosa Pizza tradicional Italiana </p>
    						<p class="price"><span>R$52.90</span> <a href="catalogo" class="ml-2 btn btn-white btn-outline-white">Comprar</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="catalogo" class="img" style="background-image: url(images/pizza-2.jpg);"></a>
    					<div class="text p-4">
    						<h3>Greek Pizza</h3>
    						<p>Deliciosa Pizza tradicional Grega</p>
    						<p class="price"><span>R$57.90</span> <a href="catalogo" class="ml-2 btn btn-white btn-outline-white">Comprar</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="catalogo" class="img" style="background-image: url(images/pizza-3.jpg);"></a>
    					<div class="text p-4">
    						<h3>Caucasian Pizza</h3>
    						<p>Deliciosa Pizza tradicional Caucasian</p>
    						<p class="price"><span>R$62.90</span> <a href="catalogo" class="ml-2 btn btn-white btn-outline-white">Comprar</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="catalogo" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>American Pizza</h3>
    						<p>Deliciosa Pizza tradicional Americana </p>
    						<p class="price"><span>R$53.90</span> <a href="catalogo" class="ml-2 btn btn-white btn-outline-white">Comprar</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="catalogo" class="img order-lg-last" style="background-image: url(images/pizza-5.jpg);"></a>
    					<div class="text p-4">
    						<h3>Tomatoe Pie</h3>
    						<p>Delicioso molho de tomate artesanal</p>
    						<p class="price"><span>R$66.90</span> <a href="catalogo" class="ml-2 btn btn-white btn-outline-white">Comprar</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="catalogo" class="img order-lg-last" style="background-image: url(images/pizza-6.jpg);"></a>
    					<div class="text p-4">
    						<h3>Margherita</h3>
    						<p>Deliciosa Pizza tradicional Margherita</p>
    						<p class="price"><span>R$72.90</span> <a href="catalogo" class="ml-2 btn btn-white btn-outline-white">Comprar</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a  class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
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

    

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Classicos da casa</h2>
            <p>Pizzas classicas da casa pizza-pizza, leaia sobre a historia de nossas pizzas mais famosas e como elas perduram a tanto tempo como nossas favoritas da casa.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a  class="block-20" style="background-image: url('images/pizza-1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	
                <h3 class="heading mt-2"><a href="#">Calabresa coberta com mussarela</a></h3>
                <p>Uma deliciosa Pizza de calabresa com mussarela e molho artezanal , uma das mais pedidas da casa.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a  class="block-20" style="background-image: url('images/pizza-2.jpg');">
              </a>
              <div class="text py-4 d-block">
              	
                <h3 class="heading mt-2"><a href="#">Tradicional Italian</a></h3>
                <p>Uma deliciosa Pizza tradicional italina com massa fina e crocante, borda levemente tostada..</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a  class="block-20" style="background-image: url('images/pizza-3.jpg');">
              </a>
              <div class="text py-4 d-block">
              	
                <h3 class="heading mt-2"><a href="#">Mussarela com borda recheada</a></h3>
                <p>Uma deliciosa Pizza de mussarela e borda recheada de queijo mussarela .</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-counter ftco-bg-dark img " id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			
			<div class="overlay">
				
					<h2 class="mb-5 pt-5 text-center ">Use o maps como auxilio para criar uma rota até a sua proxima 🍕🍕🍕. </h2>
				
			</div>

    	<div class="container-wrap mt-5">
    		<div class="row no-gutters d-md-flex align-items-center">
				
    			<div class="col-md-6 d-flex">
    				<div class="mx-auto">
						<!-- 	MAPA DO LOCAL DA PIZZARIA -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.65032196554432!2d-46.17541009551297!3d-23.517926089614956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd851f596f5e1%3A0x6ccc8b4e43c28b9f!2sMogi%20das%20Cruzes%20-%20Br%C3%A1s%20Cubas%2C%20Mogi%20das%20Cruzes%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1704474568939!5m2!1spt-BR!2sbr" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate text-white">
					<p >
					Descubra a atmosfera única da Pizzapizza no Google View! Navegue pelo nosso acolhedor espaço com toques rústicos e modernos. Para uma experiência ainda mais conveniente, trace sua rota até nós pelo Google Maps. Sua deliciosa pizza 
					aguarda por você em um ambiente que mistura tradição e conforto. Venha nos visitar e deixe-nos encantar seus sentidos! 🍕✨</p>

					
	    			
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
 
