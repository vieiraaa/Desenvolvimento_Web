<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\ProdutosController;


Route::get('/laravel', function () {
    return view('welcome');
});

    Route::get('/fornecedores/novo', [FornecedoresController::class, 'cadastro_novo']);

    Route::post('fornecedores/novo', [FornecedoresController:: class, 'novo'])->name('fornecedores_novo');

    Route::get('/fornecedores/listar', [FornecedoresController::class, 'listar'])->name('fornecedores_listar');

    Route::get('/fornecedores/{id}/produtos', [FornecedoresController::class, 'produtos_Fornecedor'])->name('produtos_fornecedor');

    Route::get('/fornecedores/alterar/{id}', [FornecedoresController::class, 'alterar'])->name('fornecedores_alterar');

    Route::post('/fornecedores/alterar', [FornecedoresController::class, 'salvar'])->name('fornecedores_salvar');

    Route::get('fornecedores/excluir/{id}', [FornecedoresController::class, 'excluir'])->name('fornecedores_excluir');

    Route::get('/estados/novo', [EstadosController::class, 'cadastro_novo']);

    Route::post('estados/novo', [EstadosController:: class, 'novo'])->name('estados_novo');

    Route::get('/produtos/novo', [ProdutosController::class, 'cadastro_novo']);

    Route::post('produtos/novo', [ProdutosController:: class, 'novo'])->name('produtos_novo');

    Route::get('/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');

    Route::get('/produtos/alterar/{id}', [ProdutosController::class, 'alterar'])->name('produtos_alterar');

    Route::post('/produtos/alterar', [ProdutosController::class, 'salvar'])->name('produtos_salvar');

    Route::get('produtos/excluir/{id}', [ProdutosController::class, 'excluir'])->name('produtos_excluir');