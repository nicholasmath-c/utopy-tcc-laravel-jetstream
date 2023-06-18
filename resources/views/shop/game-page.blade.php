<x-app-layout>

    <div class=" ">
        <div>
            <div class="flex flex-col-2">

                <div class="max-w-4xl pr-7">
                    <h1 class=" text-white text-4xl">{{ $game->title }}</h1>
                    <img class=" rounded-md mr-60" width=630
                        src="{{ url("storage/games/{$game->title}/{$game->banner}") }}">

                    <div class="mt-5">
                        <h1 class=" text-3xl ">Sobre este jogo</h1>

                        <div class="">
                            <div class=" max-w-3xl ">
                                <p class=" text-lg ">
                                    {{ $game->long_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" border-l-4 border-main-500 rounded-sm pt-10 pl-2 w-[450px]">
                    <img class="max-w-xs rounded-md " src="{{ url("storage/games/{$game->title}/{$game->cover}") }}">
                    <div class="pt-4">
                        <p class="flex flex-row text-white text-lg max-w-[100px] "> <span
                                class=" text-gray-500">Desenvolvedor-</span>
                            <span class=" pl-6"> {{ $developer->user->firstname }} {{ $developer->user->lastname }}-
                                {{ $developer->user->nickname }} </span>
                        </p>
                        <hr class=" rounded-md">
                        <p class="text-white text-lg"> <span class=" text-gray-500">Categoria -</span> <span
                                class=" pl-6"> {{ $game->genreGame->name }} </span> </p>
                        <hr class=" rounded-md">

                        <div class=" mt-10 ml-9">
                            <x-button class=" w-64 h-16"> Adcionar ao Carrinho </x-button>
                            <x-button class=" mt-4 w-64 h-16"> Comprar Jogo </x-button>
                        </div>
                    </div>

                    <div class=" w-full pl-4 ml-4 mt-10">
                        <div class=" max-w-fit ">
                            <div class=" max-w-full ">
                                <p class=" text-2xl font-heading mb-2">
                                    Requisitos minimos
                                </p>

                                <div class=" text-slate-400 text-lg">
                                    <p>
                                        Sistema operacional - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        CPU - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        GPU - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        RAM - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        Storage - <span class="text-white">INFO AQUI</span>
                                    </p>
                                </div>

                            </div>

                            <div class="mt-7">
                                <p class=" text-2xl font-heading mb-2 ">
                                    Requisitos Recomendados
                                </p>

                                <div class=" text-slate-400 text-lg">
                                    <p>
                                        Sistema operacional - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        CPU - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        GPU - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        RAM - <span class="text-white">INFO AQUI</span>
                                    </p>

                                    <p>
                                        Storage - <span class="text-white">INFO AQUI</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



</x-app-layout>


<script>
    var developer = @json($developer);
</script>
