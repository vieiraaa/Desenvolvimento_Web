@extends('template')
@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->descricao }}</td>
            <td>{{ $c->valor }}</td>
            <td>{{ $c->categoria }}</td>
            <td>
                <a href="{{ route('produtos_alterar', ['id' => $c->id])}}" class="btn btn-warning">Alterar</a>
                <a href="#" onclick="excluir( {{ $c->id }})" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    function excluir(id){
        if(confirm(`Deseja realmente excluir o produto ${id}?`)){
            location.href = route('produtos_excluir', {'id':id});
        }
    }
</script>
@endsection