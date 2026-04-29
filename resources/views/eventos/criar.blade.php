@extends('layouts.app')

@section('content')

<div class="card shadow p-4">
    <h2>Criar Evento</h2>

    <input class="form-control mb-3 mt-3" placeholder="Nome">
    <input class="form-control mb-3" placeholder="Local">
    <input class="form-control mb-3" type="date">
    <textarea class="form-control mb-3" placeholder="Descrição"></textarea>

    <button class="btn btn-success">Criar</button>
</div>

@endsection