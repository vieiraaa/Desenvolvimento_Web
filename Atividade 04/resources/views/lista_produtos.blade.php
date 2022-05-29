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
            <th>Fornecedor</th>
            <th>Funcionalidades</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->descricao }}</td>
            <td>{{ $p->valor }}</td>
            <td>{{ $p->categoria }}</td>
            @foreach($fornecedores as $fornecedor)
                @if($fornecedor->id == $p->fornecedor_id)
                    <td>{{ $fornecedor->nome }}</td>
                @endif
            @endforeach
            <td>
                <a href="{{ route('produtos_alterar', ['id' => $p->id])}}" class="btn btn-warning">Alterar</a>
                <a href="#" onclick="excluir( {{ $p->id }})" class="btn btn-danger">Excluir</a>
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