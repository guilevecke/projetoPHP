
@extends('layouts.app')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="text-center">
        <h1>Bem-vindo à Tela Inicial</h1>

        <form action="{{ route('usuarios.index') }}" method="get" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Acessar lista de Usuários</button>
        </form>

        <form action="{{ route('produtos.index') }}" method="get" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Acessar lista de Produtos</button>
        </form>
    </div>
</div>
