<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-7">Cadastro de Gênero</h1>


                    <div class="card-body">
                        <form method="post" action="{{ route('genre-game.index') }}">
                            @csrf

                            <div class="mb-2">
                                <x-input type="text" name="nome" id="nome_categoria"
                                    placeholder="Nome do gênero" class="form-control w-72" required />

                                <x-button type="submit" class="w-auto mb-10 align-center mt-4">
                                    {{ __('Criar') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
