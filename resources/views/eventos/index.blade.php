<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('eventos.buscar') }}" method="GET" class="mb-4">
                <input class="form-control" type="text" name="termo" placeholder="Pesquisar evento..."
                    value="{{ request('termo') }}">
            </form>
            <div class="row g-4">

                @forelse ($eventos as $evento)
                    <div class="col-md-4">
                        <div class="card shadow h-100">
                            <img src="{{ $evento->imagem ?: asset('assets/img/placeholder.svg') }}"
                                onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.svg') }}'"
                                class="card-img-top" alt="{{ $evento->name }}">

                            <div class="card-body">
                                <h4>{{ $evento->name }}</h4>
                                <p class="text-muted">Data: {{ \Carbon\Carbon::parse($evento->data)->format('d/m/Y') }}
                                </p>
                                <p>Local: {{ $evento->local }}</p>
                                <p>{{ $evento->descricao }}</p>

                                @auth
                                    <form action="{{ route('favoritos.salvar') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                                        <button type="submit" class="btn btn-danger">
                                            Favoritar ❤️
                                        </button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Nenhum evento encontrado.</p>
                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>