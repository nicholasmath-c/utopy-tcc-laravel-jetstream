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

                @if (isset($errors) && count($errors) > 0)
                    <div class="text-sm text-main-500 mb-2">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @csrf
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-main-500">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Imagem
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Título
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gênero
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Desenvolvedor
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Descrição
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Preço
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Data de Lançamento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Classificação Indicativa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-slate-900">
                            @foreach ($game as $games)
                                <tr>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        <img src="{{ asset("storage/img/games_img/$games->image") }}" alt=""
                                            width=150>
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->title }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->genreGame->name }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->developer->firstname }} {{ $games->developer->lastname }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->description }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        R$ {{ $games->price }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->release_date }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                        {{ $games->age_rating }}
                                    </th>
                                    <td class="px-6 py-4 gap-10">
                                        <a href="{{ route('game.edit', $games->id) }}"
                                            class="font-medium text-white hover:underline">
                                            Editar
                                        </a>
                                        <form action="" method="POST" class="delete inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-main-500 hover:underline">
                                                Excluir
                                            </button>
                                        </form>
                                        <button
                                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                            type="button" data-te-collapse-init data-te-ripple-init
                                            data-te-ripple-color="light" data-te-target="#collapseExample"
                                            aria-expanded="false" aria-controls="collapseExample">
                                            Button with data-te-target
                                        </button>
                                        <div class="!visible hidden" id="collapseExample" data-te-collapse-item>
                                            <div
                                                class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 dark:text-neutral-50">
                                                Some placeholder content for the collapse component. This panel is
                                                hidden by default but revealed when the user activates the relevant
                                                trigger.
                                            </div>
                                        </div>
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

    import {
        Collapse,
        Ripple,
        initTE,
    } from "tw-elements";

    initTE({
        Collapse,
        Ripple
    });
</script>
