<x-admin-layout>
    <div class="w-full py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-800 p-10 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card-header">
                    <div class="mb-16">
                        <h1 class="font-heading text-white text-xl mb-5">Adicionar Jogo</h1>

                        @if (isset($errors) && (count($errors) > 0))
                            <div class="text-rose-500 text-sm">
                                @foreach ($errors as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form id="form" method="POST" action="{{ route('game.store') }}"
                            enctype="multipart/form-data" class="text-white">
                            @csrf
                            <!--Título-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Título</div>
                                    <div name="description" class="text-sm text-slate-400">Insira o título do jogo, o
                                        nome pelo qual ele será conhecido.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <x-input type="text" name="title" id="title" class="w-full" required />
                                </div>
                            </div>

                            <!--Desenvolvedor-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Desenvolvedor</div>
                                    <div name="description" class="text-sm text-slate-400">Informe o nome do estúdio ou
                                        da pessoa responsável pelo desenvolvimento do jogo.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <select name="developer_id" id="developer"
                                        class="w-full flex flex-row form-control p-3 h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                        required>
                                        <option value="">
                                            Selecione um Desenvolvedor
                                        </option>
                                        @foreach ($developer as $developers)
                                            <option value="{{ $developers->id }}">
                                                {{ $developers->user->firstname }} {{ $developers->user->lastname }}
                                                ({{ $developers->user->nickname }})
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--Gênero-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Gênero</div>
                                    <div name="description" class="text-sm text-slate-400">Escolha o gênero principal do
                                        jogo, como ação, aventura, RPG, esportes, etc.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <select name="genre_game_id" id="genre_game"
                                        class="w-full flex flex-row form-control p-3 h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
                                        required>
                                        <option value="">
                                            Selecione um Gênero
                                        </option>
                                        @foreach ($genreGame as $genreGames)
                                            <option value="{{ $genreGames->id }}">
                                                {{ $genreGames->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--Descrição Curta-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Descrição Curta</div>
                                    <div name="description" class="text-sm text-slate-400">Forneça uma breve descrição
                                        que resuma o jogo em poucas palavras. Destaque os principais recursos e
                                        atrativos.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <x-input type="text" name="short_description" id="short_description"
                                        class="w-full" />
                                </div>
                            </div>

                            <!--Descrição Longa-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Descrição Longa</div>
                                    <div name="description" class="text-sm text-slate-400">Digite uma descrição mais
                                        detalhada do jogo, incluindo informações sobre a história, mecânicas de jogo e
                                        qualquer outro aspecto relevante.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <textarea name="long_description" id="long_description" class="text-black" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <!--Capa-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Capa</div>
                                    <div name="description" class="text-sm text-slate-400">Faça o upload de uma imagem
                                        que represente visualmente o jogo. Geralmente, a capa é a imagem principal que
                                        será exibida nas listagens e na página do jogo.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <input type="file" name="cover" id="cover"
                                        class="flex flex-row file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                        required />
                                </div>
                            </div>

                            <!--Banner-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Banner</div>
                                    <div name="description" class="text-sm text-slate-400">Adicione um banner
                                        personalizado para o jogo. O banner pode ser uma imagem mais ampla e chamativa
                                        que será usada em destaque, como em sliders ou banners promocionais.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <input type="file" name="banner" id="banner"
                                        class="flex flex-row file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                        required />
                                </div>
                            </div>

                            <!--Preço-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Preço</div>
                                    <div name="description" class="text-sm text-slate-400">Indique o valor de venda do
                                        jogo.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <x-input type="text" name="price" id="price" class="w-full" required
                                        placeholder="R$0,00" maxlength="12" />
                                </div>
                            </div>

                            <!--Desconto-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Desconto <span
                                            class="text-slate-400 font-medium text-sm">(Opcional)</span></div>
                                    <div name="description" class="text-sm text-slate-400">Caso haja algum desconto
                                        especial aplicado ao jogo, informe o valor do desconto.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <x-input type="text" name="discount" id="discount" class="w-full" required
                                        placeholder="R$0,00" maxlength="12" />
                                </div>
                            </div>

                            <!--Data de Lançamento-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Data de Lançamento</div>
                                    <div name="description" class="text-sm text-slate-400">Insira a data em que o jogo
                                        foi lançado ou será lançado.</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <input type="date" name="release_date" id="release_date"
                                        class="flex flex-row form-control p-3 w-full  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white"
                                        required />
                                </div>
                            </div>

                            <!--Classificação Indicativa-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Classificação Indicativa
                                    </div>
                                    <div name="description" class="text-sm text-slate-400">Insira a classificação
                                        etária (exemplo: livre, maiores de 18 anos, etc.).</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <select
                                        class="flex flex-row form-control p-3 w-full  h-12 bg-slate-900 border border-slate-400 shadow-md rounded-lg focus:ring-main-500 focus:border-main-500 focus:bg-slate-800 transition duration-300 ease-in-out text-white "
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
                            </div>

                            <!--Arquivos do Jogo-->
                            <div class='md:grid md:grid-cols-3 md:gap-6 mb-16'>
                                <div>
                                    <div name="title" class="text-lg font-medium mb-2">Arquivos do Jogo</div>
                                    <div name="description" class="text-sm text-slate-400">Faça o upload do arquivo do
                                        jogo em si. Geralmente, é um arquivo compactado contendo os dados necessários
                                        para executar o jogo: (.zip, .rar)</div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <input type="file" name="game_file_path" id="game_file_path"
                                        class="flex flex-row form-control file:p-3 file:w-52 file:h-512 file:bg-slate-900 file:border-slate-400 file:shadow-md file:rounded-xl file:text-white"
                                        required />
                                </div>
                            </div>

                            <!--Requisitos-->
                            <div class="md:flex md:flex-col-2 justify-between gap-20">
                                <div class="w-full">
                                    <div class="mb-10">
                                        <h2 class="text-lg font-medium mb-2">Requisitos Mínimos</h2>
                                        <div class="text-sm text-slate-400">Informe as especificações mínimas do
                                            sistema necessárias para que o jogo seja executado corretamente.</div>
                                    </div>
                                    <div class="my-4">
                                        <div class="mb-4">
                                            <label for="">Placa de Vídeo (GPU):</label>
                                            <x-input type="text" class="mt-4 mb-8 w-full" name="rm_gpu"
                                                id="" required />

                                            <label for="">Processador (CPU):</label>
                                            <x-input type="text" class="mt-4 mb-8 w-full" name="rm_cpu"
                                                id="" required />

                                            <label for="">Memória RAM:</label>
                                            <x-input type="text" class="mt-4 mb-8 w-full" name="rm_ram"
                                                id="" required />

                                            <label for="">Armazenamento:</label>
                                            <x-input type="text" class="mt-4 mb-8 w-full" name="rm_storage"
                                                id="" required />

                                            <label for="">Sistema Operacional:</label>
                                            <x-input type="text" class="mt-4 mb-8 w-full" name="rm_os"
                                                id="" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mb-10">
                                        <h2 class="text-lg font-medium mb-2">Requisitos Recomendados</h2>
                                        <div class="text-sm text-slate-400">Forneça as especificações recomendadas do
                                            sistema que garantirão uma experiência de jogo ideal.</div>
                                    </div>
                                    <div class="my-4">
                                        <label for="">Placa de Vídeo (GPU):</label>
                                        <x-input type="text" class="mt-4 mb-8 w-full" name="rr_gpu"
                                            id="" required />

                                        <label for="">Processador (CPU):</label>
                                        <x-input type="text" class="mt-4 mb-8 w-full" name="rr_cpu"
                                            id="" required />

                                        <label for="">Memória RAM:</label>
                                        <x-input type="text" class="mt-4 mb-8 w-full" name="rr_ram"
                                            id="" required />

                                        <label for="">Armazenamento:</label>
                                        <x-input type="text" class="mt-4 mb-8 w-full" name="rr_storage"
                                            id="" required />

                                        <label for="">Sistema Operacional:</label>
                                        <x-input type="text" class="mt-4 mb-8 w-full" name="rr_os"
                                            id="" required />
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row gap-4 w-full justify-end">
                                <a href="{{ route('game.index') }}">
                                    <x-secondary-button>Voltar</x-secondary-button>
                                </a>
                                <x-button type="submit" class=""> Adicionar novo jogo </x-button>
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

<script>
    $('#form').on('submit', function() {
        $inputPrice = $('#price').val().replace(/[^\d,]/g, "").replace(",", ".");
        $inputDiscount = $('#discount').val().replace(/[^\d,]/g, "").replace(",", ".");

        $("#price").val($inputPrice);
        $("#discount").val($inputDiscount);
    });
</script>
