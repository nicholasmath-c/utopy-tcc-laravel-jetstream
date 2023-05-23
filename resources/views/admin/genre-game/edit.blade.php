<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase ">Editar Gênero</h1>
                    <br>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('genre-game.update', $genreGame->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-2">
                            <input type="text" name="id" class=" form-control hidden"
                                required value="{{ $genreGame->id }}" />

                            <x-input type="text" name="name"
                                class=""
                                required value="{{ $genreGame->name }}" />
                        </div>

                        <x-button type="submit" class="mt-4">
                            {{ __('Salvar') }}
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
