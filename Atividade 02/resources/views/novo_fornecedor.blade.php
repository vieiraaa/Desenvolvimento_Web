@extends('template')
@section('titulo')
Fornecedor - novo
@endsection
@section('conteudo')
    <h1>Novo fornecedor</h1>
    <form method="post" action="{{ route('fornecedores_novo') }}">
        @csrf
        <label>Nome</label>
            <input type="text" name="nome"><br>
        <label>Endereco</label>
            <input type="text" name="endereco"><br>
        <label>CEP</label>
            <input type="text" name="cep"><br>
        <label>Estado</label>
            <select name="estado">
                @foreach($estados as $estado)
                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                 @endforeach
            </select>
        <label>cidade</label>
            <input type="text" name="cidade"><br>
            
        <input type="submit" value="Enviar">
    </form>
@endsection
