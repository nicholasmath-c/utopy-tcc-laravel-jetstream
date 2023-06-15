<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-7">Adicionar Jogo</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data"
                            onsubmit="desformatarPreco()" class="text-white">
                            @csrf

                            <div class="mb-4">
                                <label for="nome">Titulo</label>
                                <x-input type="text" name="title" id="title" class="form-control" required />
                            </div>
                            <div class="mb-4">
                                <label for="nome">Desenvolvedor</label>
                                <select name="developer_id" id="developer"
                                    class=" flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                    required>
                                    <option value="">
                                        Selecione uma Opção
                                    </option>
                                    @foreach ($dev as $devs)
                                        <option value="{{ $devs->id }}">
                                            {{ $devs->firstname }} {{ $devs->lastname }} ({{ $devs->nickname }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
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
                            <div class="mb-4">
                                <label for="nome">Descrição Curta</label>
                                <x-input type="text" name="short_description" id="short_description" />
                            </div>
                            <div class="mb-4">
                                <label for="nome">Descrição Longa</label>
                                <x-input type="text" name="long_description" id="long_description" />
                            </div>
                            <div class="mb-4">
                                <label for="thumb">Capa</label>
                                <input type="file" name="thumb" id="thumb"
                                    class="flex flex-row form-control file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="banner">Banner</label>
                                <input type="file" name="banner" id="banner"
                                    class="flex flex-row form-control file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="price">Preço</label>
                                <x-input type="text" name="price" id="price" class="form-control" required
                                    placeholder="R$0,00" onkeyup="formatarPreco()" maxlength="12" />
                            </div>
                            <div class="mb-4">
                                <label for="price">Desconto (Opcional)</label>
                                <x-input type="text" name="discount" id="discount" class="form-control" required
                                    placeholder="R$0,00" onkeyup="formatarPreco()" maxlength="12" />
                            </div>
                            <div class="mb-4">
                                <label for="nome">Data de Lançamento</label>
                                <input type="date" name="release_date" id="release_date"
                                    class="flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="age_rating">Classificação Indicativa</label>
                                <select
                                    class="flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                    id="age_rating" name="age_rating" required>
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
                            <div class="mb-4">
                                <label for="game_file_path">Arquivo do Jogo</label>
                                <input type="file" name="game_file_path" id="game_file_path"
                                    class="flex flex-row form-control file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                    required />
                            </div>

                            <hr>

                            <div class="mt-4 mb-4">
                                <div class="mb-4">
                                    <h4 class="mb-2">Requisitos Minimos</h4>

                                    <label for="">GPU:</label>
                                    <x-input type="text" class="mb-4" name="rm_gpu" id="" required />

                                    <label for="">CPU:</label>
                                    <x-input type="text" class="mb-4"  name="rm_cpu" id="" required />

                                    <label for="">RAM:</label>
                                    <x-input type="text" class="mb-4"  name="rm_ram" id="" required />

                                    <label for="">Armazenamento:</label>
                                    <x-input type="text" class="mb-4"  name="rm_storage" id="" required />

                                    <label for="">Sistema Operacional:</label>
                                    <x-input type="text" class="mb-4"  name="rm_os" id="" required />
                                </div>
                                <hr class="">
                                <div class=" mt-4 mb-4">
                                    <h4 class="mb-4">Requisitos Recomendados</h4>
                                    <label for="">GPU:</label>
                                    <x-input type="text" class="mb-4"  name="rr_gpu" id="" required />

                                    <label for="">CPU:</label>
                                    <x-input type="text" class="mb-4"  name="rr_cpu" id="" required />

                                    <label for="">RAM:</label>
                                    <x-input type="text" class="mb-4"  name="rr_ram" id="" required />

                                    <label for="">Armazenamento:</label>
                                    <x-input type="text" class="mb-4" name="rr_storage" id="" required />

                                    <label for="">Sistema Operacional:</label>
                                    <x-input type="text" class="mb-4"  name="rr_os" id="" required />
                                </div>
                            </div>

                            <x-button type="submit" class="btn btn-success"> Gravar </x-button>

                        </form>
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

    function desformatarValor() {
        var input = document.getElementById("price");
        var valor = input.value.replace(/[^\d,]/g, "").replace(",", ".") // Remove todos os caracteres não numéricos

        input.value = valor;
    }
</script>
