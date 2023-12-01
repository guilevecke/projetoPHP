@extends('layouts.app')
@section('cadastro')
<h1>Cadastro de Produtos</h1>
<form action="{{ route('produtos.novo')}}" method="post"> 
    @csrf 
    <input type="text" name="nomeProduto" placeholder="Nome">
    <input type="text" name="descricaoProduto" placeholder="Descrição">
    <input type="text" name="qtdinicialProduto" placeholder="Quantidade Inicial">
    <input type="text" name="valorProduto" placeholder="Valor">
    <input type="text" name="categoriaProduto" placeholder="Categoria">
    <input type="text" name="estadoProduto" placeholder="Estado">
    <input type="submit" value="Enviar">
</form>
@endsection