
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
              <li class="nav-item"><a href="{{ route('admin.logout') }}" class="nav-link">sair</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
    
    <script>
        function mudarCor(element) {element.style.backgroundColor = "rgba(200, 200, 200,.8)";}
        function restaurarCor(element) {element.style.backgroundColor = "rgba(52, 58, 64,.7)";}

        
    </script>
        <main class="flex-shrink-0">

          <header class="py-5" style="">
              <h2 class="text-white text-center py-5 fs-3">Setores do Adiministrador</h2><p class="breadcrumbs text-center" style="font-size: 50px;cursor: pointer;">⌄</p>
              <h3 class="text-white text-center py-5 fs-3">Area de cadastramento</h3>
              
                <div class="w-75 mx-auto">
                    <!-- Menu-->
                    <div class="row text-white" >
                        <div onclick="selectDisplay1()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(52, 58, 64,.7);"><p>Produto</p></div>
                        <div onclick="selectDisplay2()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Fornecedor</p></div>
                        <div onclick="selectDisplay3()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Insumo Fornecedor</p></div>
                        <div onclick="selectDisplay4()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(52, 58, 64,.7)"><p>Funcionario</p></div>
                    </div>


                    <!-- area de exibição-->
                    <div id="disp1" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Area para Cadastramento dos Produtos</p></div>
                       
                       
                        <div class="container m-5 mx-auto">
                            <form action="{{ route('admin.cadproduto') }}" method="post" >
                            @csrf
                                <div class="form-floating mb-3">
                                    <label for="nome_produto">Digite o Nome do Produto</label>
                                    <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do Produto" required>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="foto_produto">Digite o Nome da foto do Produto que sera carregada</label>
                                    <input type="text" class="form-control" id="foto_produto" name="foto_produto" placeholder="Nome da foto do Produto" required>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="avaliacao">Digite a Avaliação Estrelas Inicial</label>
                                    <input type="number" class="form-control" id="avaliacao" name="avaliacao" min="0" max="5" step="1" required>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="descricao">Insira o Texto Descritivo do Produto</label>
                                    <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Texto descritivo" required></textarea>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="preco">Insira o Preço do Produto</label>
                                    <input type="number" class="form-control" id="preco" name="preco" min="0" placeholder="Preço do Produto" required>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="lucro">Insira o Lucro do Produto</label>
                                    <input type="number" class="form-control" id="lucro" name="lucro"  min="0" placeholder="Lucro do Produto" required>
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="imposto_lucro">Insira valor do Imposto</label>
                                    <input type="number" class="form-control" id="imposto" name="imposto" min="0" placeholder="Imposto Sobre o Produto" required>
                                </div>

                                <select class="form-control mb-3" id="categoria" name="categoria"  required>
                                        <option value="" disabled selected>Selecione a categoria</option>
                                        <option value="pizza">Pizza</option>
                                        <option value="bebida">Bebida</option>
                                        <option value="lanche">Lanche</option>
                                        <option value="doces">Doces</option>
                                </select>

                                <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                            </form>
                        </div>
                        
   
                        
                            
                    </div>

                    <!-- area de exibição-->
                    <div id="disp2" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Fornecedor</p></div>
                       
                        
                                <div class="container m-5 mx-auto">
                                <form action="{{ route('admin.cadfornecedor') }}" method="post" >
                                @csrf
                                    <div class="form-floating mb-3">
                                        <label for="nome_fornecedor">Insira o Nome do Fornecedor</label>
                                        <input type="text" class="form-control" id="nome_fornecedor" name="nome_fornecedor" placeholder="Nome do Fornecedor" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="endereco">Insira o Endereço do Fornecedor</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Fornecedor" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="telefone">Insira o Telefone do Fornecedor</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Fornecedor" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="cnpj">Insira o CNPJ do Fornecedor</label>
                                        <input type="number" class="form-control" id="cnpj" name="cnpj" min="0" placeholder="CNPJ" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="email">Insira o Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>

                                <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                            </form>
                        </div>
                            
                    </div>

                    <!-- area de exibição-->
                    <div id="disp3" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Insumo Fornecedor</p></div>
                        
                        <div class="container m-5 mx-auto">
                        <form action="{{ route('admin.cad_produtofornecedor') }}" method="post" >
                        @csrf
                            <div class="form-floating mb-3">
                                <label for="nome_item">Insira o Nome do Item/Insumo</label>
                                <input type="text" class="form-control" id="nome_item" name="nome_item" placeholder="Nome do Item" required>
                            </div>

                            <div class="form-floating mb-3">
                                <label for="cnpj">Insira o CNPJ do Fornecedor</label>
                                <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" required>
                            </div>

                            <div class="form-floating mb-3">
                                <label for="validade">Insira o prazo de validade</label>
                                <input type="date" class="form-control" id="validade" name="validade" placeholder="Validade do produto" required>
                            </div>


                            <div class="form-floating mb-3">
                                <label for="preco">Insira o Preço do Produto</label>
                                <input type="number" class="form-control" id="preco" name="preco" min="0.01" step="0.01" placeholder="Preço do Produto" required>
                            </div>

                            <div class="form-floating mb-3">
                                <label for="qnt">Insira a quantidade de Produto</label>
                                <input type="number" class="form-control" id="qnt" name="qnt" min="1" placeholder="Quantidade do Produto" required>
                            </div>
                
                            <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                        </form>
                        </div>
                    </div>

                    

                    <!-- area de exibição-->
                    <div id="disp4" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Funcionario</p></div>
                        

                                <div class="container m-5 mx-auto">
                                <form action="{{ route('admin.cadfuncionario') }}" method="post" >
                                @csrf
                                    <div class="form-floating mb-3">
                                        <label for="nome">Insira o Nome do funcionario</label>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do funcionario" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="endereco">Insira o Endereço do funcionario</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do funcionario" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="cpf">Insira o CPF do funcionario</label>
                                        <input type="number" class="form-control" id="cpf" name="cpf" placeholder="CPF Do Funcionario" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="telefone">Insira o Telefone do funcionario</label>
                                        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="salario">Insira o Salario do funcionario</label>
                                        <input type="number" class="form-control" id="salario" name="salario" placeholder="Salario do funcionario" required>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <label for="cargo">Insira o Cargo do funcionario</label>
                                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo do funcionario" required>
                                    </div>

                                    

                                    <select class="form-control mb-3" id="status" name="status" required>
                                        <option value="ativo">Ativo</option>
                                        <option value="ferias">Férias</option>
                                        <option value="desligado">Desligado</option>
                                    </select>

                                    

                                    

                                    <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                                </form>
                            </div>
                                            
                        
                            
                    </div>




                    </div>
                </div>

            <h3 class="text-white text-center py-5 fs-3">Area de exclusão</h3>
              
                <div class="w-75 mx-auto">
                <!-- Menu-->
                <div class="row text-white" >
                    <div onclick="selectDisplay11()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(52, 58, 64,.7);"><p>Produto</p></div>
                    <div onclick="selectDisplay12()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Fornecedor</p></div>
                    <div onclick="selectDisplay13()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Insumo Fornecedor</p></div>
                    <div onclick="selectDisplay14()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(52, 58, 64,.7)"><p>Funcionario</p></div>
                </div>

                    
                <!-- area de exibição-->
                <div id="disp11" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Produto </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('admexcluirproduto') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="excluir_produto">Nome do produto que deseja excluir, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="excluir_produto" name="excluir_produto" placeholder="Nome do produto" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp12" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('admexcluirfornecedor') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="excluir_fornecedor">CNPJ do fornecedor que deseja excluir, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="excluir_fornecedor" name="excluir_fornecedor" placeholder="CNPJ do fornecedor" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp13" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Insumo do Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('admexcluirEstoque') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="excluir_produto_fornecedor">Nome do Produto do fornecedor que deseja excluir, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="excluir_produto_fornecedor" name="excluir_produto_fornecedor" placeholder="Nome do produto do fornecedor" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp14" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Funcionario</p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('admexcluirfuncionario') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="excluir_funcionario">CPF do Funcionario que deseja excluir, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="excluir_funcionario" name="excluir_funcionario" placeholder="CPF do Funcionario" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>





                    </div>
                    
                </div>

                <h3 class="text-white text-center py-5 fs-3">Area de Edição</h3>
              
                <div class="w-75 mx-auto">
                <!-- Menu-->
                <div class="row text-white" >
                    <div onclick="selectDisplay21()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(52, 58, 64,.7);"><p>Produto</p></div>
                    <div onclick="selectDisplay22()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Fornecedor</p></div>
                    <div onclick="selectDisplay23()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Insumo Fornecedor</p></div>
                    <div onclick="selectDisplay24()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(52, 58, 64,.7)"><p>Funcionario</p></div>
                </div>

                    
                <!-- area de exibição-->
                <div id="disp21" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Produto </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminModifyProduto') }}" method="post" >
                    @csrf
                    

                        <div class="form-floating mb-3">
                            <label for="editar_produto">Nome do produto que deseja Editar, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="editar_produto" name="editar_produto" placeholder="Nome do produto" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp22" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminModifyFornecedor') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="editar_fornecedor">CNPJ do fornecedor que deseja Editar, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="editar_fornecedor" name="editar_fornecedor" placeholder="CNPJ do fornecedor" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp23" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Insumo do Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminModifyEstoque') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="editar_produto_fornecedor">Nome do Produto do fornecedor que deseja Editar, para consulta geral deixe em branco</label>
                            <input type="text" class="form-control" id="editar_produto_fornecedor" name="editar_produto_fornecedor" placeholder="Nome do produto do fornecedor" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp24" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Funcionario, para consulta geral deixe em branco</p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminModifyFuncionario') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="excluir_funcionario">CPF do Funcionario que deseja Editar</label>
                            <input type="text" class="form-control" id="editar_funcionario" name="editar_funcionario" placeholder="CPF do Funcionario" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>





                    </div>
                    
                </div>



                <h3 class="text-white text-center py-5 fs-3">Pesquisa e Visualização de dados deixe em branco para listar todos.</h3>
              
                <div class="w-75 mx-auto">
                <!-- Menu-->
                <div class="row text-white" >
                    <div onclick="selectDisplay31()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(52, 58, 64,.7);"><p>Produto</p></div>
                    <div onclick="selectDisplay32()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Fornecedor</p></div>
                    <div onclick="selectDisplay33()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(52, 58, 64,.7);"><p>Produto Fornecedor</p></div>
                    <div onclick="selectDisplay34()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(52, 58, 64,.7)"><p>Funcionario</p></div>
                </div>

                    
                <!-- area de exibição-->
                <div id="disp31" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Produto </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminVisualizarProduto') }}" method="post" >
                    @csrf
                    

                        <div class="form-floating mb-3">
                            <label for="visualizar_produto">Nome do produto que deseja Visualizar</label>
                            <input type="text" class="form-control" id="visualizar_produto" name="visualizar_produto" placeholder="Nome do produto" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp32" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminVisualizarFornecedor') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="visualizar_fornecedor">CNPJ do fornecedor que deseja Visualizar</label>
                            <input type="text" class="form-control" id="visualizar_fornecedor" name="visualizar_fornecedor" placeholder="CNPJ do fornecedor" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp33" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Produto do Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminVisualizarEstoque') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="visualizar_produto_fornecedor">Nome do Produto do fornecedor que deseja Visualizar</label>
                            <input type="text" class="form-control" id="visualizar_produto_fornecedor" name="visualizar_produto_fornecedor" placeholder="Nome do produto do fornecedor" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="disp34" class="my-5 pb-2 bg-dark" style="border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(0, 0, 0,.4)"><p class="fs-3 text-white">Pesquisar Funcionario</p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="{{ route('adminVisualizarFuncionario') }}" method="post" >
                    @csrf
                        

                        <div class="form-floating mb-3">
                            <label for="visualizar_funcionario">CPF do Funcionario que deseja Visualizar</label>
                            <input type="text" class="form-control" id="visualizar_funcionario" name="visualizar_funcionario" placeholder="CPF do Funcionario" >
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>





                    </div>
                    
                </div>

               
             
              
          </header>

          
            
        </main>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
    function selectDisplay1() {
      var div=document.getElementById("disp1").style.display;
      if(div=="block"){document.getElementById("disp1").style.display = "none";}else{
        document.getElementById("disp1").style.display = "block";
        document.getElementById("disp2").style.display = "none";
        document.getElementById("disp3").style.display = "none";
        document.getElementById("disp4").style.display = "none";}
    }
    function selectDisplay2() {
      var div=document.getElementById("disp2").style.display;
      if(div=="block"){document.getElementById("disp2").style.display = "none";}else{
        document.getElementById("disp1").style.display = "none";
        document.getElementById("disp2").style.display = "block";
        document.getElementById("disp3").style.display = "none";
        document.getElementById("disp4").style.display = "none";}
    }
    function selectDisplay3() {
      var div=document.getElementById("disp3").style.display;
      if(div=="block"){document.getElementById("disp3").style.display = "none";}else{
        document.getElementById("disp1").style.display = "none";
        document.getElementById("disp2").style.display = "none";
        document.getElementById("disp3").style.display = "block";
        document.getElementById("disp4").style.display = "none";}
    }
    function selectDisplay4() {
      var div=document.getElementById("disp4").style.display;
      if(div=="block"){document.getElementById("disp4").style.display = "none";}else{
        document.getElementById("disp1").style.display = "none";
        document.getElementById("disp2").style.display = "none";
        document.getElementById("disp3").style.display = "none";
        document.getElementById("disp4").style.display = "block";}
    }


    function selectDisplay11() {
      var div=document.getElementById("disp11").style.display;
      if(div=="block"){document.getElementById("disp11").style.display = "none";}else{
        document.getElementById("disp11").style.display = "block";
        document.getElementById("disp12").style.display = "none";
        document.getElementById("disp13").style.display = "none";
        document.getElementById("disp14").style.display = "none";}
    }
    function selectDisplay12() {
      var div=document.getElementById("disp12").style.display;
      if(div=="block"){document.getElementById("disp12").style.display = "none";}else{
        document.getElementById("disp11").style.display = "none";
        document.getElementById("disp12").style.display = "block";
        document.getElementById("disp13").style.display = "none";
        document.getElementById("disp14").style.display = "none";}
    }
    function selectDisplay13() {
      var div=document.getElementById("disp13").style.display;
      if(div=="block"){document.getElementById("disp13").style.display = "none";}else{
        document.getElementById("disp11").style.display = "none";
        document.getElementById("disp12").style.display = "none";
        document.getElementById("disp13").style.display = "block";
        document.getElementById("disp14").style.display = "none";}
    }
    function selectDisplay14() {
      var div=document.getElementById("disp14").style.display;
      if(div=="block"){document.getElementById("disp14").style.display = "none";}else{
        document.getElementById("disp11").style.display = "none";
        document.getElementById("disp12").style.display = "none";
        document.getElementById("disp13").style.display = "none";
        document.getElementById("disp14").style.display = "block";}
    }

    function selectDisplay21() {
      var div=document.getElementById("disp21").style.display;
      if(div=="block"){document.getElementById("disp21").style.display = "none";}else{
        document.getElementById("disp21").style.display = "block";
        document.getElementById("disp22").style.display = "none";
        document.getElementById("disp23").style.display = "none";
        document.getElementById("disp24").style.display = "none";}
    }
    function selectDisplay22() {
      var div=document.getElementById("disp22").style.display;
      if(div=="block"){document.getElementById("disp22").style.display = "none";}else{
        document.getElementById("disp21").style.display = "none";
        document.getElementById("disp22").style.display = "block";
        document.getElementById("disp23").style.display = "none";
        document.getElementById("disp24").style.display = "none";}
    }
    function selectDisplay23() {
      var div=document.getElementById("disp23").style.display;
      if(div=="block"){document.getElementById("disp23").style.display = "none";}else{
        document.getElementById("disp21").style.display = "none";
        document.getElementById("disp22").style.display = "none";
        document.getElementById("disp23").style.display = "block";
        document.getElementById("disp24").style.display = "none";}
    }
    function selectDisplay24() {
      var div=document.getElementById("disp24").style.display;
      if(div=="block"){document.getElementById("disp24").style.display = "none";}else{
        document.getElementById("disp21").style.display = "none";
        document.getElementById("disp22").style.display = "none";
        document.getElementById("disp23").style.display = "none";
        document.getElementById("disp24").style.display = "block";}
    }

    function selectDisplay31() {
      var div=document.getElementById("disp31").style.display;
      if(div=="block"){document.getElementById("disp31").style.display = "none";}else{
        document.getElementById("disp31").style.display = "block";
        document.getElementById("disp32").style.display = "none";
        document.getElementById("disp33").style.display = "none";
        document.getElementById("disp34").style.display = "none";}
    }
    function selectDisplay32() {
      var div=document.getElementById("disp32").style.display;
      if(div=="block"){document.getElementById("disp32").style.display = "none";}else{
        document.getElementById("disp31").style.display = "none";
        document.getElementById("disp32").style.display = "block";
        document.getElementById("disp33").style.display = "none";
        document.getElementById("disp34").style.display = "none";}
    }
    function selectDisplay33() {
      var div=document.getElementById("disp33").style.display;
      if(div=="block"){document.getElementById("disp33").style.display = "none";}else{
        document.getElementById("disp31").style.display = "none";
        document.getElementById("disp32").style.display = "none";
        document.getElementById("disp33").style.display = "block";
        document.getElementById("disp34").style.display = "none";}
    }
    function selectDisplay34() {
      var div=document.getElementById("disp34").style.display;
      if(div=="block"){document.getElementById("disp34").style.display = "none";}else{
        document.getElementById("disp31").style.display = "none";
        document.getElementById("disp32").style.display = "none";
        document.getElementById("disp33").style.display = "none";
        document.getElementById("disp34").style.display = "block";}
    }
</script>

          
         


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
 