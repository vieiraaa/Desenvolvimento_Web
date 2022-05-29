@extends('template')
@section('titulo')
Estado - novo
@endsection
@section('conteudo')
    <h1 style="padding-top: 60px;">
        Cadastrar Estado:
    </h1>

    <form method="post" action="{{ route('estados_novo') }}">
        @csrf

        <label class="col-form-label">Descrição: </label>
            <input type="text" name="nome" class="form-control"><br><br>

        <label class="col-form-label">Sigla: </label>
            <input type="text" name="sigla" class="form-control"><br><br>

        <input class="btn btn-secondary" type="submit" value="Enviar">

    </form>
@endsection