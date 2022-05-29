<?php

namespace App\Http\Controllers;
use App\Models\Estado;

use Illuminate\Http\Request;

class EstadosController extends Controller
{
    function cadastro_novo(){
        return view('novo_estado');
    }
    function novo(Request $req){
        $nome = $req->input('nome');
        $sigla = $req->input('sigla');

        $estado = new Estado();
        $estado->nome = $nome;
        $estado->sigla = $sigla;

        $estado->save();

        return redirect()->route('fornecedores_listar');
    }
}
