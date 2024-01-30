<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoguinController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\MinhaContaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCadastrosController;
use App\Http\Controllers\AdminConsultController;
use App\Http\Controllers\AdminDeletController;
use App\Http\Controllers\AdminModifyController;
use App\Http\Controllers\MeusPedidosController;
use App\Http\Controllers\PagamentoController;


/*

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

*/


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::group(['prefix' => '/loguin'], function () {
    Route::get('/', [LoguinController::class, 'index'])->name('loguin.index');
    Route::post('/logar', [LoguinController::class, 'loguin'])->name('loguin.loguin');
    Route::get('/logout', [LoguinController::class, 'logout'])->name('loguin.logout');
});

Route::group(['prefix' => '/cadastro'], function () {
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro.index');
    Route::post('/', [CadastroController::class, 'store'])->name('cadastro.store');
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/minhaconta', [MinhaContaController::class, 'index'])->name('minhaconta.index');

Route::post('/minhacontaUpdate', [MinhaContaController::class, 'update'])->name('minhacontaUpdate');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/meusPedidos', [MeusPedidosController::class, 'index'])->name('meusPedidos');

Route::get('/meusPedidosCadastro', [MeusPedidosController::class, 'cadastramento'])->name('meusPedidos.cadastro');

Route::get('/pagamento', [PagamentoController::class, 'index'])->name('pagamento');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::post('/carrinhoAdicionarProduto', [CarrinhoController::class, 'store'])->name('carrinho.add');

Route::post('/carrinhoDiminuirProduto', [CarrinhoController::class, 'diminuir'])->name('carrinho.diminuir');

Route::post('/carrinhoMostrarProdutos', [CarrinhoController::class, 'show'])->name('carrinho.mostrar');

Route::post('/carrinhoDeletarProduto', [CarrinhoController::class, 'destroy'])->name('carrinho.del');


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/adm', [AdminController::class, 'index'])->name('loguin_adm.index');

Route::post('/adm_log', [AdminController::class, 'login'])->name('loguin_adm.login');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/admin_logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::post('/admincadproduto', [AdminCadastrosController::class, 'cadastrar_produto'])->name('admin.cadproduto');

Route::post('/admincadfornecedor', [AdminCadastrosController::class, 'cadastrar_fornecedor'])->name('admin.cadfornecedor');

Route::post('/admincadprodutofornecedor', [AdminCadastrosController::class, 'cadastrar_produtoFornecedor'])->name('admin.cad_produtofornecedor');

Route::post('/admincadfuncionario', [AdminCadastrosController::class, 'cadastrar_funcionario'])->name('admin.cadfuncionario');

Route::post('/admexcluirproduto', [AdminDeletController::class, 'exclude_produto'])->name('admexcluirproduto');

Route::post('/admexcluirfornecedor', [AdminDeletController::class, 'exclude_fornecedor'])->name('admexcluirfornecedor');

Route::post('/admexcluirEstoque', [AdminDeletController::class, 'exclude_estoque'])->name('admexcluirEstoque');

Route::post('/admexcluirfuncionario', [AdminDeletController::class, 'exclude_funcionario'])->name('admexcluirfuncionario');

Route::delete('/admexcluir', [AdminDeletController::class, 'exclude_by_id'])->name('admexcluir');

Route::post('/adminModifyProduto', [AdminModifyController::class, 'modificar_produto'])->name('adminModifyProduto');

Route::post('/adminModifyFornecedor', [AdminModifyController::class, 'modificar_fornecedor'])->name('adminModifyFornecedor');

Route::post('/adminModifyEstoque', [AdminModifyController::class, 'modificar_estoque'])->name('adminModifyEstoque');

Route::post('/adminModifyFuncionario', [AdminModifyController::class, 'modificar_funcionario'])->name('adminModifyFuncionario');

Route::post('/adminModify', [AdminModifyController::class, 'modificar_by_id'])->name('adminModify');

Route::post('/adminVisualizarProduto', [AdminConsultController::class, 'visualizar_produto'])->name('adminVisualizarProduto');

Route::post('/adminVisualizarFornecedor', [AdminConsultController::class, 'visualizar_fornecedor'])->name('adminVisualizarFornecedor');

Route::post('/adminVisualizarEstoque', [AdminConsultController::class, 'visualizar_estoque'])->name('adminVisualizarEstoque');

Route::post('/adminVisualizarFuncionario', [AdminConsultController::class, 'visualizar_funcionario'])->name('adminVisualizarFuncionario');