<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutosController;
//Rota para listar todos os usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class,'cadastro'])->name('usuarios.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/usuarios/novo', [UsuarioController::class,'novo'])->name('usuarios.novo');


//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 
'telaLogin'])->name('tela.login'); 

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

//Rota para acessar a tela de alteração de usuario
Route::get('/usuario/alterar/{id}', [UsuarioController::class,'telaAlteracao'])->name('usuario.atualiza'); 

//Rota para alterar o cadastro do usuario
Route::post('/usuario/alterar/{id}', 
[UsuarioController::class,'alterar'])->name('usuario.alterar'); 

//Rota para excluir o usuario
Route::get('/usuario/excluir/{id}', 
[UsuarioController::class,'excluir'])->name('usuario.excluir'); 


//////////////////////////////////////////////////////////////////

//Rota para listar todos os produtos
Route::get('/produtos', [ProdutosController::class,'index'])->name('produtos.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/produtos/cadastro', [ProdutosController::class,'cadastro'])->name('produtos.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/produtos/novo', [ProdutosController::class,'novo'])->name('produtos.novo');


//Rota para acessar a tela de alteração de produtos
Route::get('/produto/alterar/{id}', [ProdutosController::class,'telaAlteracao'])->name('produto.atualiza'); 

//Rota para alterar o cadastro do produtos
Route::post('/produto/alterar/{id}', 
[ProdutosController::class,'alterar'])->name('produto.alterar'); 

//Rota para excluir o produtos
Route::get('/produto/excluir/{id}', 
[ProdutosController::class,'excluir'])->name('produto.excluir'); 

/////////////////////////////////

//Rota para tela de inicio
Route::get('/', function (){
    
    return view('inicio');
    
})->name('index');
