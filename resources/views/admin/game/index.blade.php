<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-10">Jogos</h1>
                    <x-button class="w-auto mb-10 align-center"><a href="{{ route('game.create') }}"
                            class="">Adicionar</a>
                    </x-button>
                </div>

                @if (session()->has('success'))
                    <div class="text-sm text-white mb-2">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @csrf
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
                            @foreach ($game as $games)
                                <tr>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">

                                    </th>
                                    <td class="px-6 py-4 gap-10">
                                        <a href=""
                                            class="font-medium text-white hover:underline">
                                            Editar
                                        </a>
                                        <form action="" method="POST"
                                            class="delete inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-rose-500 hover:underline">
                                                Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="my-4">
                        {{ $game->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</x-admin-layout>

<script>
    $(document).on('submit', '.delete', function() {
        return confirm('Deseja realmente excluir esse jogo?');
    });
</script>