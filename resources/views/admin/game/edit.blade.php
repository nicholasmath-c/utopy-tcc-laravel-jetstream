<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <h1 class="font-heading text-white text-xl uppercase mb-7">Adicionar Jogo</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('game.update', $game->id) }}" enctype="multipart/form-data"
                            onsubmit="desformatarValor()" class="text-white">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="nome">Titulo</label>
                                <x-input type="text" name="title" id="title" class="form-control"
                                    value="{{$game->title}}" required/>
                            </div>
                            <div class="mb-4">
                                <label for="nome">Desenvolvedor</label>
                                <select name="developer_id" id="developer"
                                    class=" flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                    required>

                                    @foreach ($dev as $devs)
                                        <option value="{{ $devs->id }}" {{$game->developer_id == $devs->id ? 'selected' : ''}}>
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

                                    @foreach ($genreGame as $genreGames)
                                        <option value="{{ $genreGames->id }}" {{$game->genre_game_id == $genreGames->id ? 'selected' : ''}}>
                                            {{ $genreGames->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="nome">Descrição</label>
                                <x-input type="text" name="description" id="description" value="{{$game->description}}"/>
                            </div>
                            <div class="mb-4">
                                <label for="image">Imagem</label>
                                <img src="{{asset("storage/img/games_img/$game->image")}}" alt="" width=200>
                                <input type="file" name="image" id="image"
                                    class="flex flex-row form-control file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white" />
                            </div>
                            <div class="mb-4">
                                <label for="price">Valor</label>
                                <x-input type="text" name="price" id="price" class="form-control" required
                                    placeholder="R$0,00" onkeyup="formatarValor()" maxlength="12" value="{{$game->price}}" />
                            </div>
                            <div class="mb-4">
                                <label for="nome">Data de Lançamento</label>
                                <input type="date" name="release_date" id="release_date" value="{{$game->release_date}}"
                                    class="flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="age_rating">Classificação Indicativa</label>
                                <select
                                    class="flex flex-row form-control p-3 w-52  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                    id="age_rating" name="age_rating">
                                    <option value="L" {{$game->age_rating == 'L' ? 'selected' : ''}}>Livre</option>
                                    <option value="10+" {{$game->age_rating == '10+' ? 'selected' : ''}}>10+</option>
                                    <option value="12+" {{$game->age_rating == '12+' ? 'selected' : ''}}>12+</option>
                                    <option value="14+" {{$game->age_rating == '14+' ? 'selected' : ''}}>14+</option>
                                    <option value="16+" {{$game->age_rating == '16+' ? 'selected' : ''}}>16+</option>
                                    <option value="18+" {{$game->age_rating == '18+' ? 'selected' : ''}}>18+</option>
                                </select>
                            </div>

                            <hr>

                            <div class="mt-4 mb-4">
                                <div class="mb-4">
                                    <h4 class="mb-2">Requisitos Minimos</h4>

                                    <label for="">GPU:</label>
                                    <x-input type="text" class="mb-4" name="rm_gpu" id="" value='{{$rm->gpu}}'/>

                                    <label for="">CPU:</label>
                                    <x-input type="text" class="mb-4" name="rm_cpu" id="" value='{{$rm->cpu}}'/>

                                    <label for="">RAM:</label>
                                    <x-input type="text" class="mb-4" name="rm_ram" id="" value='{{$rm->ram}}'/>

                                    <label for="">Armazenamento:</label>
                                    <x-input type="text" class="mb-4" name="rm_storage" id="" value='{{$rm->storage}}'/>

                                    <label for="">Sistema Operacional:</label>
                                    <x-input type="text" class="mb-4" name="rm_os" id="" value='{{$rm->os}}'/>
                                </div>
                                <hr class="">
                                <div class=" mt-4 mb-4">
                                    <h4 class="mb-4">Requisitos Recomendados</h4>

                                    <label for="">GPU:</label>
                                    <x-input type="text" class="mb-4" name="rr_gpu" id="" value='{{$rr->gpu}}'/>

                                    <label for="">CPU:</label>
                                    <x-input type="text" class="mb-4" name="rr_cpu" id="" value='{{$rr->cpu}}'/>

                                    <label for="">RAM:</label>
                                    <x-input type="text" class="mb-4" name="rr_ram" id="" value='{{$rr->ram}}'/>

                                    <label for="">Armazenamento:</label>
                                    <x-input type="text" class="mb-4" name="rr_storage" id="" value='{{$rr->storage}}'/>

                                    <label for="">Sistema Operacional:</label>
                                    <x-input type="text" class="mb-4" name="rr_os" id="" value='{{$rr->os}}'/>
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
