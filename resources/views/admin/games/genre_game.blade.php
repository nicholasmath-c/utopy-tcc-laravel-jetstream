<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-10">Admin - Categoria de Jogos</h1>
                    <x-button class="w-40 mb-10"><a href="{{ route('game.genre.create') }}" class="">Nova
                            Categoria</a>
                    </x-button>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-rose-500">
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
                        <tbody>
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-slate-500 whitespace-nowrap">
                                    Apple Watch 5
                                </th>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-rose-600 hover:underline">Edit</a>
                                </td>
                            </tr>
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
