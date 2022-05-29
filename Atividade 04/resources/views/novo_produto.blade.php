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

        <label>Descrição do Item: </label>
            <input type="text" class="form-control" name="descricao"><br><br>

        <label>Valor: </label>
            <input type="text" class="form-control" name="valor"><br><br>
            
        <label class="col-form-label">Categoria: </label>
            <input type="text" class="form-control" name="categoria"><br><br>

        <label>Fornecedor: </label>

            <select name="fornecedor" placeholder="Default select example" class="form-select" >

                @foreach($fornecedores as $fornecedor)
                    <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                 @endforeach
                 
            </select><br><br>
            
        <input class="btn btn-secondary" type="submit" value="Enviar">

    </form>

@endsection
