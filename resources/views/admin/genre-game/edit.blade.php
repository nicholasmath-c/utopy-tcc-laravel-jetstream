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
                    <h1 class="font-heading text-white text-xl uppercase ">Editar Categorias</h1>
                    <br>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route("genre-game.update", $categoria->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-2">
                            <input type="text" name="id" id="nome_categoria" class=" form-control hidden" required
                                value="{{ $categoria->id }}" />

                            <input type="text" name="nome" id="nome_categoria" class="flex flex-row justify-between items-center p-3 gap-4 w-52 h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg text-slate-200 focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out form-control form-control" required
                                value="{{ $categoria->name }}" />
                        </div>

                        <x-button type="submit" class="mt-4">
                            {{ __('Editar') }}
                        </x-button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</x-admin-layout>
