<nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex flex-wrap align-items-center justify-content-between" style="row-gap: 10px;">

        <a class="navbar-brand fw-bold fs-3" href="{{ route('dashboard') }}" style="color: #f0f0f0 !important;">
            Bachstage
        </a>

        <div class="d-flex flex-wrap align-items-center" style="gap: 15px;">

            <a href="{{ route('dashboard') }}"
                style="color: {{ request()->routeIs('dashboard') ? '#8b5cf6' : '#f0f0f0' }} !important; text-decoration: none; font-weight: 500;">
                Eventos
            </a>

            <a href="{{ route('eventos.meus') }}"
                style="color: {{ request()->routeIs('eventos.meus') ? '#8b5cf6' : '#f0f0f0' }} !important; text-decoration: none; font-weight: 500;">
                Meus Eventos
            </a>

            <a href="{{ route('favoritos.listar') }}"
                style="color: {{ request()->routeIs('favoritos.listar') ? '#8b5cf6' : '#f0f0f0' }} !important; text-decoration: none; font-weight: 500;">
                Favoritos
            </a>

            <a href="{{ route('profile.edit') }}"
                style="color: {{ request()->routeIs('profile.edit') ? '#8b5cf6' : '#f0f0f0' }} !important; text-decoration: none; font-weight: 500;">
                Perfil
            </a>

            <form method="POST" action="{{ route('logout') }}" class="d-inline m-0">
                @csrf
                <button type="submit" class="btn btn-link p-0"
                    style="border: none; background: none; color: #f0f0f0 !important; text-decoration: none; font-weight: 500;">
                    Sair
                </button>
            </form>

        </div>

    </div>
</nav>