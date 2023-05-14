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
                    <h1 class="font-heading text-white text-xl uppercase mb-10">Categoria dos Jogos</h1>
                    <x-button class="w-auto mb-10 align-center"><a href="{{ route('genre-game.create') }}" class="">Criar
                            Categoria</a>
                    </x-button>
                </div>

                @if (session()->has('success'))
                    <div class="text-xs text-white">
                        {{session()->get('success')}}
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-main-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Categoria
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ações
                                </th>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-slate-900">
                            @foreach ($categoriasGame as $categoria)
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    {{ $categoria->name }}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="{{ route('genre-game.edit', $categoria->id) }}" class="font-medium text-white hover:underline">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</x-admin-layout>

