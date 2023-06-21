<x-admin-layout>
    <div class="w-full py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <div class="mb-16">
                        <h1 class="font-heading text-white text-xl mb-5">Editar Gênero: {{ $genreGame->name }}</h1>

                        @if (isset($errors) && count($errors) > 0)
                            <div class="text-rose-500 text-sm">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form id="form" method="POST" action="{{ route('genre-game.store') }}"
                            enctype="multipart/form-data" class="text-white">
                            @csrf
                            <!--Título-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Nome</div>
                                    <div name="description" class="text-sm text-slate-400">Insira o nome do genêro, que estará em inúmeros jogos fantásticos.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <x-input type="text" name="title" id="title" class="w-full" required value="{{ $genreGame->name }}"/>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 w-full justify-end">
                                <a href="{{ route('genre-game.index') }}">
                                    <x-secondary-button>Voltar</x-secondary-button>
                                </a>
                                <x-button type="submit" class=""> Adicionar novo gênero </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</x-admin-layout>
