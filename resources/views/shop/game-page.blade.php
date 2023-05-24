<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class=" mt-16 ">
            <div class="flex flex-row">

                <div class=" max-w-4xl pr-4">
                    <h1 class=" text-white text-4xl">Celeste</h1>
                    <img src="{{ url('img/games_img/CelesteBanner.jpeg') }}">
                </div>

                <div class="items-center pt-16">
                    <img class="max-w-xs" src="{{ url('img/games_img/CelesteBanner.jpeg') }}" >
                    <div class="pt-4">
                        <p class="flex flex-row text-white text-lg"> <span class=" text-gray-500">Desenvolvedor -</span>  <span class=" pl-6" > Cherry </span>   </p>
                        <hr>
                        <p class="text-white text-lg"> <span class=" text-gray-500">Categoria -</span> <span class=" pl-6" > Aventura </span>   </p>
                        <hr>
                        <div class=" mt-10 ml-9">

                            <x-button class=" w-64 h-16"> Adcionar ao Carrinho </x-button>
                            <x-button class=" mt-4 w-64 h-16"> Comprar Jogo </x-button>

                        </div>

                    </div>

                </div>
            </div>


        </div>




    </div>














</x-app-layout>
