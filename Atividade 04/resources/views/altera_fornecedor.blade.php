@extends('template')
@section('titulo')
Alterar Fornecedor = #{{ $fornecedor->id }}
@endsection
@section('conteudo')
    <h1>Alterar fornecedor = #{{ $fornecedor->id }}</h1>
    <form method="post" action="{{ route('fornecedores_salvar') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $fornecedor->id}}">
        <label>Nome</label>
            <input type="text" name="nome" value="{{ $fornecedor->nome}}"><br>
        <label>Endereco</label>
            <input type="text" name="endereco" value="{{ $fornecedor->endereco}}"><br>
        <label>CEP</label>
            <input type="text" name="cep" value="{{ $fornecedor->cep}}"><br>
        <label>Estado</label>
            <select name="estado">
                @foreach($estados as $estado)
                    @if($estado->sigla == $fornecedor->estado)
                        <option value="{{$estado->sigla}}" selected>{{$estado->sigla}}</option>
                    @else
                        <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                    @endif
                 @endforeach
            </select>
        <label>cidade</label>
            <input type="text" name="cidade" value="{{ $fornecedor->cidade}}"><br>
            
        <input type="submit" value="Enviar">
    </form>
@endsection
