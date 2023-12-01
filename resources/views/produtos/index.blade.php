@extends('layouts.app')
@section('conteudo')
<h1>Lista de Produtos</h1>
<div class="table-responsive"> <table class="table table-striped"> <thead>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Quantidade Inicial</th>
    <th>Valor</th>
    <th>Categoria</th>
    <th>Estado</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($produtos as $produto)
    <tr>
    <td>{{ $produto->id }}</td>
    <td>{{ $produto->nomeProduto }}</td>
    <td>{{ $produto->descricaoProduto }}</td>
    <td>{{ $produto->qtdinicialProduto }}</td>
    <td>{{ $produto->valorProduto }}</td>
    <td>{{ $produto->categoriaProduto }}</td>
    <td>{{ $produto->estadoProduto }}</td>
    <td>
        <a class="btn btn-warning" href="{{
        route('produto.atualiza', ['id' => $produto->id]) }}">Alterar</a>
        <a class="btn btn-danger" href="#" onclick="exclui({{ $produto->id }})">Excluir</a> </td> </tr>
            @endforeach
            </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('produtos.cadastro')}}"> Cadastrar Novo </a>
</div>
<script>
    function exclui(id) {
        if (confirm('Deseja excluir o produto de id: ' + id + '?')) {
            location.href = '/produto/excluir/' + id;
        }
    }
</script>
@endsection