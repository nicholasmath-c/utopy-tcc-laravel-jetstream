
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Início') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-7">Cadastro Categorias</h1>


                    <div class="card-body">
                        <form method="post" action="{{ route('genre-game.index') }}" >
                            @csrf

                            <div class="mb-2">
                                <x-input type="text" name="nome" id="nome_categoria" placeholder="Nome da categoria" class="form-control w-64" required />

                                <x-button type="submit" class="w-auto mb-10 align-center mt-4">
                                    {{ __('Gravar Categoria') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>



