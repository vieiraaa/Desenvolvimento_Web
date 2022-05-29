@extends('template')
@section('titulo')
Fornecedor - novo
@endsection
@section('conteudo')

    <h1 style="padding-top: 60px;">
        Novo fornecedor
    </h1>

    <form method="post" action="{{ route('fornecedores_novo') }}">
        @csrf

        <label class="col-form-label">Nome: </label>
            <input class="form-control" type="text" name="nome"><br>

        <label class="col-form-label">Endereco: </label>
            <input class="form-control" type="text" name="endereco"><br>

        <label class="col-form-label">CEP: </label>
            <input class="form-control" type="text" name="cep"><br>

        <label class="col-form-label">Estado: </label>
            <select name="estado" placeholder="Default select example" class="form-select" >

                @foreach($estados as $estado)
                    <option value="{{$estado->sigla}}">{{$estado->sigla}}</option>
                 @endforeach

            </select><br>

        <label class="col-form-label">Cidade: </label>
            <input class="form-control" type="text" name="cidade"><br>
            
        <input class="btn btn-secondary" type="submit" value="Enviar">
        
    </form>
@endsection
