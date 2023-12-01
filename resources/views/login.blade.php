@extends('layouts.app')
@section('login')

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="{{ route('login') }}" method="post" class="col-lg-4 col-md-6 col-sm-8">
        <h1 class="text-center mb-4">Tela de Login</h1>

        @csrf
        <div class="form-group">
            <label for="usuario">Nome do Usuário</label>
            <input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário" name="login">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary btn-block rounded-pill">Entrar</button>
    </form>
</div>
