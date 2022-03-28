<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('produto/cadastro', [ProdutoController::class, 'cadastro_novo'])->name('produto_cadastro');
Route::post('/produto/novo', [ProdutoController::class, 'novo'])->name('produtos_novo');
Route::get('produto/listar', [ProdutoController::class, 'listar'])->name('produto_listar');