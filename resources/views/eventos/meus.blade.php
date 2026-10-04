<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="fw-bold">Meus Eventos</h1>

                <a href="{{ route('eventos.criar') }}" class="btn btn-success">
                    + Criar Evento
                </a>
            </div>

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

                                <div class="d-flex gap-2">
                                    <a href="{{ route('eventos.editar', $evento->id) }}" class="btn btn-warning flex-fill">
                                        Editar
                                    </a>

                                    <form action="{{ route('eventos.deletar', $evento->id) }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja excluir?')" class="flex-fill">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger w-100">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Você ainda não criou nenhum evento.</p>
                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>