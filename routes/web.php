<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//php artisan serve (roda o servidor)
//php artisan make:controller LoginController
//php artisan make:controller ProdutoController (listas produtos, visualizar o produto)
//php artisan make:controller CompraController (carrinho de compras, confirmar pagamento aqui)

//Passos:
//1 - Criar a rota
//2 - Criar o Controller e o metodo que será executado pela rota
//3 - Vincula a rota ao controller
//4 - Imposta css,javascript,img, audio para public
//5 - o html que for usar, vai para a pasta resources/views/ 
//6 - muda a extensão do html para .blade.php
//7 - Controller chamaa a view através de return view('nomedaview');


Route::get('/login', 'LoginController@telaLogin');
Route::get('/esqueceu-senha', 'LoginController@telaEsqueceuSenha')->name('esqueceu.senha');
Route::post('/logar', 'LoginController@logar')->name('logar');
Route::get('/produtos', 'ProdutosController@telaProduto')->name('produtos')->middleware('login');
Route::get('/cadastro', 'CadastroController@telaCadastro')->name('cadastro');


Route::get('/bola', function () {
    echo 'Acessou!!!!';
});

Route::get('/', function () {
    return view('welcome');
});
