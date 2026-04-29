@extends('layouts.app')

@section('content')

<h1 class="mb-4 fw-bold">Favoritos ❤️</h1>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card shadow h-100">
            <img src="{{ asset('assets/img/share-image.webp') }}" class="card-img-top">

            <div class="card-body">
                <h4>Filarmonica de BH</h4>
                <p class="text-muted">Data: 25/06/2026 18:00</p>
                <p>Local: salão de Minas</p>
                <p>Evento especial.</p>

                <button class="btn btn-outline-danger">
                    Remover ❤️
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow h-100">
            <img src="{{ asset('assets/img/rock-in-rio-2022_8054.jpeg') }}" class="card-img-top">

            <div class="card-body">
                <h4>Rock in Rio 2026</h4>
                <p class="text-muted">Data: 20/06/2026 20:00</p>
                <p>Local: Rio de Janeiro</p>
                <p>Rock nos rios.</p>


                <button class="btn btn-outline-danger">
                    Remover ❤️
                </button>
            </div>
        </div>
    </div>

</div>

@endsection