<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 overflow-hidden shadow-xl sm:rounded-lg p-10">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-10">Admin - Categoria de Jogos</h1>
                    <x-button class="w-auto mb-10 align-center"><a href="{{ route('game.genre.create') }}" class="">Criar
                            Categoria</a>
                    </x-button>
                </div>

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
<<<<<<< HEAD:app/resources/views/admin/genre-game/index.blade.php
                        <tbody>
                            @foreach ($categoriasGame as $categoria)
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-slate-500 whitespace-nowrap">
                                    {{ $categoria->name }}
                                </th>
                                <td class="pxz6 py-4">
                                    <a href="{{ route('game.genre.edit', ['id' => $categoria->id]) }}" class="font-medium text-rose-600 hover:underline">
                                        Edit
                                    </a>
=======
                        <tbody class="bg-slate-100">
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-slate-700 whitespace-nowrap">
                                    Apple Watch 5
                                </th>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-slate-700 hover:underline">Edit</a>
>>>>>>> 6a75e6be964c143b31d6ed85188d928bf9c70527:resources/views/admin/games/genre_game.blade.php
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
