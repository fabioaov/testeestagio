<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\MetodosPagamentoController;
use App\Http\Controllers\ProdutosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Produtos
Route::get('/produtos', [ProdutosController::class, 'index'])->middleware(['auth'])->name('produtos');
Route::get('/produtos/novo', [ProdutosController::class, 'create'])->middleware(['auth'])->name('produtos.novo');
Route::post('/produtos/salvar', [ProdutosController::class, 'store'])->middleware(['auth'])->name('produtos.salvar');
Route::get('/produtos/{id}/editar', [ProdutosController::class, 'edit'])->middleware(['auth'])->name('produtos.editar');
Route::put('/produtos/{id}', [ProdutosController::class, 'update'])->middleware(['auth'])->name('produtos.atualizar');
Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy'])->middleware(['auth'])->name('produtos.deletar');

//Mesas
Route::get('/mesas', [MesasController::class, 'index'])->middleware(['auth'])->name('mesas');
Route::get('/mesas/nova', [MesasController::class, 'create'])->middleware(['auth'])->name('mesas.nova');
Route::post('/mesas/salvar', [MesasController::class, 'store'])->middleware(['auth'])->name('mesas.salvar');
Route::get('/mesas/{id}/editar', [MesasController::class, 'edit'])->middleware(['auth'])->name('mesas.editar');
Route::put('/mesas/{id}', [MesasController::class, 'update'])->middleware(['auth'])->name('mesas.atualizar');
Route::delete('/mesas/{id}', [MesasController::class, 'destroy'])->middleware(['auth'])->name('mesas.deletar');

//Formas de pagamento
Route::get('/metodos_pagamento', [MetodosPagamentoController::class, 'index'])->middleware(['auth'])->name('metodos_pagamento');
Route::get('/metodos_pagamento/novo', [MetodosPagamentoController::class, 'create'])->middleware(['auth'])->name('metodos_pagamento.novo');
Route::post('/metodos_pagamento/salvar', [MetodosPagamentoController::class, 'store'])->middleware(['auth'])->name('metodos_pagamento.salvar');
Route::get('/metodos_pagamento/{id}/editar', [MetodosPagamentoController::class, 'edit'])->middleware(['auth'])->name('metodos_pagamento.editar');
Route::put('/metodos_pagamento/{id}', [MetodosPagamentoController::class, 'update'])->middleware(['auth'])->name('metodos_pagamento.atualizar');
Route::delete('/metodos_pagamento/{id}', [MetodosPagamentoController::class, 'destroy'])->middleware(['auth'])->name('metodos_pagamento.deletar');

require __DIR__.'/auth.php';
