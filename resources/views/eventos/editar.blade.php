<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Evento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow p-4">
                <h2>Editar Evento</h2>

                <form action="{{ route('eventos.atualizar', $evento->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input class="form-control mb-3 mt-3" name="name" value="{{ old('name', $evento->name) }}">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input class="form-control mb-3" name="local" value="{{ old('local', $evento->local) }}">
                    <x-input-error :messages="$errors->get('local')" class="mt-2" />
                    <input class="form-control mb-3" type="date" name="data"
                        value="{{ old('data', \Carbon\Carbon::parse($evento->data)->format('Y-m-d')) }}">
                    <x-input-error :messages="$errors->get('data')" class="mt-2" />
                    <textarea class="form-control mb-3" name="descricao">
                        {{ old('descricao', $evento->descricao) }}</textarea>
                    <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                    <input class="form-control mb-3" name="imagem" value="{{ old('imagem', $evento->imagem) }}">

                    <button type="submit" class="btn btn-warning">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>