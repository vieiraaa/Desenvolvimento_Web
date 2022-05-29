<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\Estado;

class FornecedoresController extends Controller
{
    function cadastro_novo(){
        $estados = Estado::all('sigla');
        return view('novo_fornecedor', compact('estados'));
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $estado = $req->input('estado');
        $cidade = $req->input('cidade');

        $fornecedor = new Fornecedor();
        $fornecedor->nome = $nome;
        $fornecedor->endereco = $endereco;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }
    


    function listar(){
        $fornecedores = Fornecedor::all();

        return view('lista_fornecedor', ['fornecedores' => $fornecedores]);
    }
    function produtos_Fornecedor($id){
        $fornecedor = Fornecedor::findOrFail($id);

        $produtos = $fornecedor->produtos;
        return view('lista_produtos_fornecedor', ['produtos' => $produtos], ['fornecedor' => $fornecedor]);
    }

    function alterar($id){
        $estados = Estado::all('sigla');

        $fornecedor = Fornecedor::findOrFail($id);

        return view('altera_fornecedor',['fornecedor' => $fornecedor], compact('estados'));
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $estado = $req->input('estado');
        $cidade = $req->input('cidade');

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->nome = $nome;
        $fornecedor->endereco = $endereco;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();


        return redirect()->route('fornecedores_listar');
    }

    function excluir($id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores_listar');

    }
}
