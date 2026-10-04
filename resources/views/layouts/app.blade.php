<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bachstage') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #121212;
            color: #f0f0f0;
        }

        .navbar {
            box-shadow: 0 3px 10px rgba(0, 0, 0, .4);
        }

        .nav-link {
            font-weight: 500;
        }

        .navbar-dark .nav-link,
        .navbar-dark .navbar-brand {
            color: #f0f0f0 !important;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #8b5cf6 !important;
        }

        .card {
            background: #1e1e1e;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            color: #f0f0f0;
        }

        .card img {
            height: 220px;
            object-fit: cover;
        }

        .card .text-muted {
            color: #a0a0a0 !important;
        }

        .btn {
            border-radius: 10px;
        }

        .btn-success {
            background-color: #8b5cf6 !important;
            border-color: #8b5cf6 !important;
        }

        .btn-warning {
            background-color: #a78bfa !important;
            border-color: #a78bfa !important;
            color: #1e1e1e !important;
        }

        .form-control {
            background-color: #1e1e1e;
            border-color: #3a3a3a;
            color: #f0f0f0;
        }

        .form-control:focus {
            background-color: #1e1e1e;
            border-color: #8b5cf6;
            color: #f0f0f0;
            box-shadow: 0 0 0 0.25rem rgba(139, 92, 246, .25);
        }

        .form-control::placeholder {
            color: #888;
        }

        /* as caixas de Perfil (Breeze) usam bg-white do Tailwind, não .card do Bootstrap */
        .bg-white {
            color: #1f2937;
            color-scheme: light;
            /* impede o navegador de re-escurecer os campos sozinho */
        }

        .bg-white input,
        .bg-white textarea {
            background-color: #fff !important;
            color: #1f2937 !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    @include('layouts.navigation')

    <div class="container py-5">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>