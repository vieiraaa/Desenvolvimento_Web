@extends('template')

@section('titulo')
    Atividade 02
@endsection

@section('conteudo')

    <h1 style="padding-top: 60px;">
        Cadastro de Produtos: <br><br>
    </h1>

    <form method="post" action="{{ route('produtos_salvar') }}">

        @csrf
        
        <input type="hidden" name="id" value="{{$produto->id}}">

        <label>Descrição do Item: </label>
            <input type="text" class="form-control" name="descricao" value="{{$produto->descricao}}"><br><br>

        <label>Valor: </label>
            <input type="text" class="form-control" name="valor" value="{{$produto->valor}}"><br><br>
            
        <label class="col-form-label">Categoria: </label>
            <input type="text" class="form-control" name="categoria" value="{{$produto->categoria}}"><br><br>

        <label>Fornecedor: </label>

            <select name="fornecedor" class="form-select" >
                @foreach($fornecedores as $fornecedor)
                   @if($fornecedor->id == $produto->fornecedor_id)
                        <option value="{{$fornecedor->id}}" selected>{{$fornecedor->nome}}</option>
                    @else
                        <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
                    @endif

                 @endforeach
                 
            </select><br><br>
            
        <input class="btn btn-secondary" type="submit" value="Enviar">

    </form>

@endsection
