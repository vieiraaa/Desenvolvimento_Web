<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\EstadosController;


Route::get('/laravel', function () {
    return view('welcome');
});

    Route::get('/produtos/novo', [ProdutosController::class, 'produto_novo']);

    Route::post('/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos_novo');

    Route::get('/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');

    Route::get('/produtos/alterar/{id}', [ProdutosController::class, 'alterar'])->name('produtos_alterar');

    Route::post('/produtos/alterar', [ProdutosController::class, 'salvar'])->name('produtos_salvar');

    Route::get('produtos/excluir/{id}', [ProdutosController::class, 'excluir'])->name('produtos_excluir');