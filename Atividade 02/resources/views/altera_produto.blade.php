@extends('template')

@section('titulo')
    Alterar produto - Id: {{ $produto->id }}
@endsection

@section('conteudo')
    <h1>Alterar produto = #{{ $produto->id }}</h1>
    <form method="post" action="{{ route('produtos_salvar') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $produto->id}}">

            <label>Descrição: </label>
        <input type="text" name="descricao" value="{{ $produto->descricao}}"><br><br>

            <label>Valor: </label>
        <input type="text" name="valor" value="{{ $produto->valor}}"><br><br>

        <label>Categoria: </label>
            <input type="text" name="categoria" value="{{ $produto->categoria}}"><br><br>

        <input type="submit" value="Enviar">
    </form>
@endsection
W