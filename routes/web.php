<?php

use App\Http\Controllers\AlmoxarifadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SegurancaController;

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
    return view('login');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post_login', [AuthController::class, 'post_login'])->name('post_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){

    Route::get('home', [HomeController::class, 'home'])->name('home');


    // ROTAS PARA ALMOXARIFADO
    Route::prefix('almoxarifado')->group(function(){
        // PRODUTO
        Route::get('produto_index', [AlmoxarifadoController::class, 'produto_index'])->name('almoxarifado.produto.index');
        Route::get('produto_edit/{id}', [AlmoxarifadoController::class, 'produto_edit'])->name('almoxarifado.produto.edit');
        Route::post('produto_update/{id}', [AlmoxarifadoController::class, 'produto_update'])->name('almoxarifado.produto.update');
        Route::get('produto_inserir', [AlmoxarifadoController::class, 'produto_inserir'])->name('almoxarifado.produto.inserir');
        Route::post('produto_store', [AlmoxarifadoController::class, 'produto_store'])->name('almoxarifado.produto.store');
        Route::post('produto_destroy/{id}', [AlmoxarifadoController::class, 'produto_destroy'])->name('almoxarifado.produto.destroy');
        // ENTRADA
        Route::get('entrada_index', [AlmoxarifadoController::class, 'entrada_index'])->name('almoxarifado.entrada.index');
        Route::get('entrada_edit/{id}', [AlmoxarifadoController::class, 'entrada_edit'])->name('almoxarifado.entrada.edit');
        Route::post('entrada_update/{id}', [AlmoxarifadoController::class, 'entrada_update'])->name('almoxarifado.entrada.update');
        Route::get('entrada_inserir', [AlmoxarifadoController::class, 'entrada_inserir'])->name('almoxarifado.entrada.inserir');
        Route::post('entrada_store', [AlmoxarifadoController::class, 'entrada_store'])->name('almoxarifado.entrada.store');
        Route::post('entrada_destroy/{id}', [AlmoxarifadoController::class, 'entrada_destroy'])->name('almoxarifado.entrada.destroy');
        //SAIDA
        Route::get('saida_index', [AlmoxarifadoController::class, 'saida_index'])->name('almoxarifado.saida.index');
        Route::get('saida_edit/{id}', [AlmoxarifadoController::class, 'saida_edit'])->name('almoxarifado.saida.edit');
        Route::post('saida_update/{id}', [AlmoxarifadoController::class, 'saida_update'])->name('almoxarifado.saida.update');
        Route::get('saida_inserir', [AlmoxarifadoController::class, 'saida_inserir'])->name('almoxarifado.saida.inserir');
        Route::post('saida_store', [AlmoxarifadoController::class, 'saida_store'])->name('almoxarifado.saida.store');
        Route::post('saida_destroy/{id}', [AlmoxarifadoController::class, 'saida_destroy'])->name('almoxarifado.saida.destroy');
    });

    // ROTAS PARA FINANCEIRO
    Route::prefix('financeiro')->group(function(){
        // VENDAS
        Route::get('venda_index', [FinanceiroController::class, 'venda_index'])->name('financeiro.venda.index');
        Route::get('venda_edit/{id}', [FinanceiroController::class, 'venda_edit'])->name('financeiro.venda.edit');
        Route::post('venda_update/{id}', [FinanceiroController::class, 'venda_update'])->name('financeiro.venda.update');
        Route::get('venda_inserir', [FinanceiroController::class, 'venda_inserir'])->name('financeiro.venda.inserir');
        Route::post('venda_store', [FinanceiroController::class, 'venda_store'])->name('financeiro.venda.store');
        Route::post('venda_destroy/{id}', [FinanceiroController::class, 'venda_destroy'])->name('financeiro.venda.destroy');
        // GASTOS
        Route::get('gasto_index', [FinanceiroController::class, 'gasto_index'])->name('financeiro.gasto.index');
        Route::get('gasto_edit/{id}', [FinanceiroController::class, 'gasto_edit'])->name('financeiro.gasto.edit');
        Route::post('gasto_update/{id}', [FinanceiroController::class, 'gasto_update'])->name('financeiro.gasto.update');
        Route::get('gasto_inserir', [FinanceiroController::class, 'gasto_inserir'])->name('financeiro.gasto.inserir');
        Route::post('gasto_store', [FinanceiroController::class, 'gasto_store'])->name('financeiro.gasto.store');
        Route::post('gasto_destroy/{id}', [FinanceiroController::class, 'gasto_destroy'])->name('financeiro.gasto.destroy');
        // CLIENTES
        Route::get('cliente_index', [FinanceiroController::class, 'cliente_index'])->name('financeiro.cliente.index');
        Route::get('cliente_edit/{id}', [FinanceiroController::class, 'cliente_edit'])->name('financeiro.cliente.edit');
        Route::post('cliente_update/{id}', [FinanceiroController::class, 'cliente_update'])->name('financeiro.cliente.update');
        Route::get('cliente_inserir', [FinanceiroController::class, 'cliente_inserir'])->name('financeiro.cliente.inserir');
        Route::post('cliente_store', [FinanceiroController::class, 'cliente_store'])->name('financeiro.cliente.store');
        Route::post('cliente_destroy/{id}', [FinanceiroController::class, 'cliente_destroy'])->name('financeiro.cliente.destroy');
    });

    // ROTAS PARA SEGURANÇA
    Route::prefix('seguranca')->group(function(){
        // USUARIOS
        Route::get('user_index', [SegurancaController::class, 'user_index'])->name('seguranca.user.index');
        Route::get('user_edit/{id}', [SegurancaController::class, 'user_edit'])->name('seguranca.user.edit');
        Route::post('user_update/{id}', [SegurancaController::class, 'user_update'])->name('seguranca.user.update');
        Route::get('user_inserir', [SegurancaController::class, 'user_inserir'])->name('seguranca.user.inserir');
        Route::post('user_store', [SegurancaController::class, 'user_store'])->name('seguranca.user.store');
        Route::get('user_senha_edit/{id}', [SegurancaController::class, 'user_senha_edit'])->name('seguranca.user.senha_edit');
        Route::post('user_senha_update/{id}', [SegurancaController::class, 'user_senha_update'])->name('seguranca.user.senha_update');
        Route::post('user_destroy/{id}', [SegurancaController::class, 'user_destroy'])->name('seguranca.user.destroy');
    });

});
