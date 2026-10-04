<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bachstage') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0d0d0d;
        }

        .auth-logo {
            font-weight: 700;
            font-size: 2rem;
            color: #f5f5f5;
            letter-spacing: -0.5px;
        }

        .auth-logo span {
            color: #8b5cf6;
        }

        .auth-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 20px rgba(0, 0, 0, .4);
            overflow: hidden;
        }

        .auth-card .card-header-strip {
            height: 6px;
            background: #8b5cf6;
        }

        .btn-primary,
        .auth-card button[type="submit"] {
            background-color: #8b5cf6 !important;
            border-color: #8b5cf6 !important;
            border-radius: 10px !important;
        }

        .auth-card a {
            color: #8b5cf6 !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen d-flex flex-column justify-content-center align-items-center py-5"
        style="min-height: 100vh;">

        <a href="/" class="text-decoration-none mb-4">
            <span class="auth-logo">Bach<span>stage</span></span>
        </a>

        <div class="auth-card bg-white" style="width: 100%; max-width: 420px;">
            <div class="card-header-strip"></div>
            <div class="p-4">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>