<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachstage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
        }

        .navbar{
            box-shadow:0 3px 10px rgba(0,0,0,.15);
        }

        .nav-link{
            font-weight:500;
        }

        .nav-link:hover{
            color:#ff4d6d !important;
        }

        .card{
            border:none;
            border-radius:15px;
            overflow:hidden;
        }

        .card img{
            height:220px;
            object-fit:cover;
        }

        .btn{
            border-radius:10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="/eventos">
            Bachstage
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav ms-auto">

                <a class="nav-link" href="/eventos">Eventos</a>
                <a class="nav-link" href="/buscar">Buscar</a>
                <a class="nav-link" href="/favoritos">Favoritos</a>
                <a class="nav-link" href="/meus-eventos">Meus Eventos</a>
                <a class="nav-link" href="/perfil">Perfil</a>
               

            </div>
        </div>

    </div>
</nav>

<div class="container py-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>