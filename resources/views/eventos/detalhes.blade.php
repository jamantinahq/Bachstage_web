@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <img src="https://picsum.photos/900/300">

        <div class="p-4">
            <h2>Show de Rock</h2>
            <p>Descrição completa do evento.</p>

            <button class="btn btn-danger">
                Favoritar
            </button>
        </div>
    </div>
</div>
@endsection