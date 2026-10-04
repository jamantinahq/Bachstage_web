<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favoritos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="row g-4">

                @forelse ($favoritos as $favorito)
                    <div class="col-md-4">
                        <div class="card shadow h-100">
                            <img src="{{ $favorito->evento->imagem ?: asset('assets/img/placeholder.svg') }}"
                                onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.svg') }}'"
                                class="card-img-top" alt="{{ $favorito->evento->name }}">

                            <div class="card-body">
                                <h4>{{ $favorito->evento->name }}</h4>
                                <p class="text-muted">Data:
                                    {{ \Carbon\Carbon::parse($favorito->evento->data)->format('d/m/Y') }}
                                </p>
                                <p>Local: {{ $favorito->evento->local }}</p>
                                <p>{{ $favorito->evento->descricao }}</p>

                                <form action="{{ route('favoritos.deletar', $favorito->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Remover dos Favoritos ❤️
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Você ainda não tem favoritos.</p>
                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>