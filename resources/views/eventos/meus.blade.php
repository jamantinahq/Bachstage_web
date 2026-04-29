@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold">Meus Eventos</h1>

    <a href="/eventos/criar" class="btn btn-success">
        + Criar Evento
    </a>
</div>

<div class="row g-4">

    <div class="col-md-4">
            <div class="card-body">
                 <img src="{{ asset('assets/img/share-image.webp') }}" class="card-img-top">

            <div class="card-body">
                <h4>Filarmonica de BH</h4>
                <p class="text-muted">Data: 25/06/2026 18:00</p>
                <p>Local: salão de Minas</p>
                <p>Evento especial.</p>

                <div class="d-flex gap-2">
                    <a href="/eventos/editar" class="btn btn-warning flex-fill">
                        Editar
                    </a>

                    <a href="/eventos/excluir" class="btn btn-danger flex-fill">
                        Excluir
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection