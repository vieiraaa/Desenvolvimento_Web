<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    //
    function produto_novo(){
        return view('novo_produto');
    }

    function novo(Request $req){
        $descricao = $req->input('descricao');
        $valor = $req->input('valor');
        $categoria = $req->input('categoria');

        $produto = new Produto();
        $produto->descricao = $descricao;
        $produto->valor = $valor;
        $produto->categoria = $categoria;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function listar(){
        $produtos = Produto::all();

        return view('lista_produto', ['produtos' => $produtos]);
    }

    function alterar($id){
        $produto = Produto::findOrFail($id);

        return view('altera_produto',['produto' => $produto]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $descricao = $req->input('descricao');
        $valor = $req->input('valor');
        $categoria = $req->input('categoria');

        $produto = Produto::findOrFail($id);
        $produto->descricao = $descricao;
        $produto->valor = $valor;
        $produto->categoria = $categoria;

        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function excluir($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos_listar');

    }

}
