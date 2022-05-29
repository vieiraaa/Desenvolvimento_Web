@extends('template')

@section('titulo')
    Atividade 02
@endsection

@section('conteudo')
    <h1 style="padding-top: 60px;">
        Cadastro de Produtos: <br><br>
    </h1>

    <form method="post" action="{{ route('produtos_novo') }}">

        @csrf

        <label class="col-form-label">Descrição do Item: </label>
            <input type="text" class="form-control" name="descricao"><br><br>

        <label class="col-form-label">Valor: </label>
            <input type="text" class="form-control" name="valor"><br><br>

        <label class="col-form-label">Categoria: </label>
            <input type="text" class="form-control" name="categoria"><br><br>

        <input class="btn btn-secondary" type="submit" value="Enviar">

    </form>

@endsection
