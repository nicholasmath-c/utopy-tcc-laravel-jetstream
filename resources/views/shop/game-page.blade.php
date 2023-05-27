<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class=" mt-16 ">
            <div class="flex flex-row">

                <div class=" max-w-4xl pr-4">
                    <h1 class=" text-white text-4xl">{{ $game->title }}</h1>
                    <img class=" rounded-md mr-64" width=630 src="{{ url("storage/img/games_img/{$game->image}") }}">
                </div>

                <div class="items-center pt-20">
                    <img class="max-w-xs rounded-md " src="{{ url("storage/img/games_img/{$game->image}") }}">
                    <div class="pt-4">
                        <p class="flex flex-row text-white text-lg"> <span class=" text-gray-500">Desenvolvedor -</span>
                            <span class=" pl-6"> {{$game->developer->firstname}} {{$game->developer->lastname}} - {{$game->developer->nickname}} </span>
                        </p>
                        <hr class=" rounded-md" >
                        <p class="text-white text-lg"> <span class=" text-gray-500">Categoria -</span> <span
                                class=" pl-6"> {{$game->genreGame->name}} </span> </p>
                        <hr class=" rounded-md" >

                        <div class=" mt-10 ml-9">
                            <x-button class=" w-64 h-16"> Adcionar ao Carrinho </x-button>
                            <x-button class=" mt-4 w-64 h-16"> Comprar Jogo </x-button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" text-white max-w-full mt-5  ">
                <h1 class=" text-3xl ">Sobre este jogo</h1>

                <div class="flex flex-row w-full">
                    <div class=" max-w-3xl " >
                        <p class=" text-lg ">
                            {{ $game->description }}
                        </p>
                    </div>
                    <div class=" w-full border-l-4 border-main-500 rounded-sm pl-4 ml-4 ">
                        <p class=" text-lg  "></p>
                    </div>

                </div>




            </div>














</x-app-layout>
