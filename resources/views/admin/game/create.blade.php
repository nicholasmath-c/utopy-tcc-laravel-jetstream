<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Início') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 text-white px-4 py-4 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header mb-5">
                    Cadastro de Games |
                    <a href="{{ route('game.index') }}" class="btn btn-success btn-sm float-end"
                        style="color: rgb(214, 31, 175)">
                        Consulta Games
                    </a>
                    <br>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-2">
                            <label for="nome">Titulo</label>
                            <x-input type="text" name="nome" id="titulo_jogo" class="form-control" required />

                        </div>
                        <div class="mb-2">
                            <label for="nome">Gênero</label>
                            <select name="genre_game_id" id="genre_game"
                                class=" flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                required>
                                <option value="">
                                    Selecione uma Opção
                                </option>
                                @foreach ($genreGame as $genreGames)
                                    <option value="{{ $genreGames->id }}">
                                        {{ $genreGames->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="nome">Descrição</label>
                            <x-input type="text" name="description" id="" />
                        </div>
                        <div class="mb-2">
                            <label for="image">Imagem</label>
                            <input type="file" name="image" id="nome_game" class="flex flex-row form-control file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                required />
                        </div>
                        <div class="mb-2">
                            <label for="price">Valor</label>
                            <x-input type="text" name="price" id="price" class="form-control" required
                                placeholder="R$0,00" onkeyup="formatarValor()" maxlength="12" />
                        </div>
                        <div class="mb-2">
                            <label for="nome">Data de Lançamento</label>
                            <input type="date" name="release_date" id="release_date"
                                class="flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white"
                                required />
                        </div>
                        <div class="mb-2">
                            <label for="age_rating">Classificação Etária</label>
                            <select
                                class="flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                id="age_rating" name="age_rating">
                                <option value="">
                                    Selecione uma opção
                                </option>
                                <option value="L">Livre</option>
                                <option value="10+">10+</option>
                                <option value="12+">12+</option>
                                <option value="14+">14+</option>
                                <option value="16+">16+</option>
                                <option value="18+">18+</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <div class="mb-4">
                                <h4>Requisitos Minimos</h4>
                                <label for="age_rating">GPU:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">CPU:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">RAM:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">Armazenamento Mínimo:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">Sistema Operacional:</label>
                                <x-input type="text" class="form-control" name="" id="" />
                            </div>
                            <hr class="">
                            <div class=" mt-4 mb-2">
                                <h4>Requisitos Recomendados</h4>
                                <label for="age_rating">GPU:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">CPU:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">RAM:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">Armazenamento Mínimo:</label>
                                <x-input type="text" class="form-control" name="" id="" />

                                <label for="age_rating">Sistema Operacional:</label>
                                <x-input type="text" class="form-control" name="" id="" />
                            </div>
                        </div>

                        <x-button type="submit" class="btn btn-success" onkeydown="desformatarValor()" > Gravar </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</x-admin-layout>

<script>
    function formatarValor() {
        var input = document.getElementById("price");
        var valor = input.value.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
        var valorFormatado = "";

        if (valor.length > 2) {
            valorFormatado = "R$ " + Number(valor.substr(0, valor.length - 2)).toLocaleString("pt-BR") + "," + valor
                .substr(-2);
        } else if (valor.length === 2) {
            valorFormatado = "R$ 0," + valor;
        } else if (valor.length === 1) {
            valorFormatado = "R$ 0,0" + valor;
        } else {
            valorFormatado = "R$ 0,00";
        }

        input.value = valorFormatado;
    }

    function desformatarValor (){
        var input = document.getElementById("price");
        var valor = input.value.replace(/[^\d,]/g, "").replace(",", ".") // Remove todos os caracteres não numéricos

        input.value = valor;
    }
</script>
