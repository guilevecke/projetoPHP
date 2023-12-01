@extends('layouts.app')
@section('alterar')
    <h1>Alteração de Produtos</h1>
    <form method="post" action="{{ route('produto.alterar' , ['id' => $p->id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nomeProduto" placeholder="Nome" value="{{ $p ->nomeProduto }}">
        <input type="text" name="descricaoProduto" placeholder="Descrição" value="{{ $p ->descricaoProduto }}">
        <input type="text" name="qtdinicialProduto" placeholder="Quantidade Inicial" value="{{ $p ->qtdinicialProduto }}">
        <input type="text" name="valorProduto" placeholder="Valor do Produto" value="{{ $p ->valorProduto }}">
        <input type="text" name="categoriaProduto" placeholder="Categoria do Produto" value="{{ $p ->categoriaProduto }}">
        <input type="text" name="estadoProduto" placeholder="Estado do Produto" value="{{ $p ->estadoProduto }}">
        <input type="submit" value="Enviar">
    </form> 
@endsection