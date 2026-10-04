<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="{{ route('dashboard') }}">
            Bachstage
            
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav ms-auto align-items-lg-center">

                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    Eventos
                </a>

                <a class="nav-link {{ request()->routeIs('eventos.meus') ? 'active' : '' }}"
                    href="{{ route('eventos.meus') }}">
                    Meus Eventos
                </a>

                <a class="nav-link {{ request()->routeIs('favoritos.listar') ? 'active' : '' }}"
                    href="{{ route('favoritos.listar') }}">
                    Favoritos
                </a>

                <a class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}"
                    href="{{ route('profile.edit') }}">
                    Perfil
                </a>

                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link p-0 ms-lg-3"
                        style="border: none; background: none;">
                        Sair
                    </button>
                </form>

            </div>
        </div>

    </div>
</nav>