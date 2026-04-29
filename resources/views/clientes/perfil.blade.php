@extends('layouts.app')

@section('content')

<div class="card shadow p-5 text-center">

    <img
        src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
        class="rounded-circle mx-auto mb-3"
        style="
            width:120px;
            height:120px;
            object-fit:contain;
        "
    >

    <h2>Augusto Cesar</h2>

    <p class="text-muted">
        gutosousa002@gmail.com
    </p>

    <a href="/login" class="btn btn-danger mt-3">
        Logout
    </a>

</div>

@endsection