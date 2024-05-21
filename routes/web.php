<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produtos', [ProdutoController::class, 'lista'])->name('produtos');

Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra'])->whereNumber('id')->name('mostra');

Route::get('/produtos/novo', [ProdutoController::class, 'novo'])->name('novo');

Route::post('/produtos/adiciona', [ProdutoController::class, 'adiciona'])->name('adiciona');

Route::get('/produtos/json', [ProdutoController::class, 'listaJson'])->name('listaJson');

Route::get('/produtos/remove/{id}', [ProdutoController::class, 'remove'])->name('remove');

Route::get('/produtos/altera/{id}', [ProdutoController::class, 'altera'])->name('altera');

Route::post('/produtos/efetuaAlteracao/{id}', [ProdutoController::class, 'efetuaAlteracao'])->name('efetuaAlteracao');

Auth::routes();