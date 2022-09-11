<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MesasController;
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

//Mesas
Route::get('/mesas', [MesasController::class, 'index'])->middleware(['auth'])->name('mesas');
Route::get('/mesas/nova', [MesasController::class, 'create'])->middleware(['auth'])->name('mesas/nova');
Route::post('/mesas/salvar', [MesasController::class, 'store'])->middleware(['auth'])->name('mesas/salvar');

require __DIR__.'/auth.php';
