<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Evento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="card shadow p-4">

                <form action="{{ route('eventos.salvar') }}" method="POST">
                    @csrf

                    <input class="form-control mb-3 mt-3" name="name" placeholder="Nome" value="{{ old('name') }}">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <input class="form-control mb-3" name="local" placeholder="Local" value="{{ old('local') }}">
                    <x-input-error :messages="$errors->get('local')" class="mt-2" />
                    <input class="form-control mb-3" type="date" name="data" value="{{ old('data') }}">
                    <x-input-error :messages="$errors->get('data')" class="mt-2" />
                    <textarea class="form-control mb-3" name="descricao"
                        placeholder="Descrição">{{ old('descricao') }}</textarea>
                    <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                    <input class="form-control mb-3" name="imagem" placeholder="URL da imagem"
                        value="{{ old('imagem') }}">
                    <x-input-error :messages="$errors->get('imagem')" class="mt-2" />

                    <button type="submit" class="btn btn-success">Criar</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>