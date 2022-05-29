@extends('template')
@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CEP</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fornecedores as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nome }}</td>
            <td>{{ $c->endereco }}</td>
            <td>{{ $c->cep }}</td>
            <td>{{ $c->estado }}</td>
            <td>{{ $c->cidade }}</td>
            <td>
                <a href="{{ route('fornecedores_alterar', ['id' => $c->id])}}" class="btn btn-warning">Alterar</a>
                <a href="#" onclick="excluir( {{ $c->id }})" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    function excluir(id){
        if(confirm(`Deseja realmente excluir o cliente ${id}?`)){
            location.href = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection