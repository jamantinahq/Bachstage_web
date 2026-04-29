@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
    <div class="card shadow p-4" style="width:450px;">
        <h2 class="text-center mb-4">Login</h2>

        <input class="form-control mb-3" placeholder="Email">
        <input class="form-control mb-3" type="password" placeholder="Senha">

        <select class="form-select mb-3">
            <option>Usuário</option>
            <option>ADM</option>
        </select>

        <a href="/eventos" class="btn btn-danger w-100">Entrar</a>

        <p class="text-center mt-3">
            Não tem conta?
            <a href="/cadastro">Cadastre-se</a>
        </p>
    </div>
</div>
@endsection