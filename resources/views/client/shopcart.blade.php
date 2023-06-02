<x-app-layout>


    <h1 class=" pl-10 pt-5 font-heading text-4xl text-white ">Meu Carrinho</h1>

    <div class=" mb-12 flex flex-col md:flex-row max-w-7xl mx-auto  ">


        <div class="flex flex-col md:w-7/12 w-full text-white">

            <div class=" flex h-80 items-center ">

                <div class=" flex flex-col h-72 w-full overflow-auto scrollbar-hide   ">

                    <div class=" mb-2 pl-10 pb-3 pr-28">
                        <div class=" rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150   pl-2 flex flex-row pt-2">

                            <img class=" max-h-20 rounded-sm mb-2 " src="{{ url('img/games_img/CelesteCape.png') }}" alt="">
                                <div class="self-center w-96">
                                    <h1 class=" ml-2" > R$ 20,00</h1>
                                    <h1> <span class=" ml-2 text-gray-400" >Jogo base - </span>  Celeste</h1>
                                </div>

                                <div class="flex flex-col self-end items-center pb-2 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500 " href="">Remover</a>
                                </div>
                        </div>

                        <hr class=" mt-2">
                    </div>

                    <div class=" mb-2 pl-10 pb-3 pr-28">
                        <div class=" rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 pl-2 flex flex-row pt-2">

                            <img class=" max-h-20 rounded-sm mb-2 " src="{{ url('img/games_img/silksong.webp') }}" alt="">
                                <div class="self-center w-96">
                                    <h1 class=" ml-2" > R$ 20,00</h1>
                                    <h1> <span class=" ml-2 text-gray-400" >Jogo base - </span>  SilkSong</h1>
                                </div>

                                <div class="flex flex-col self-end items-center pb-2 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500 " href="">Remover</a>
                                </div>
                        </div>

                        <hr class=" mt-2">
                    </div>

                    <div class=" mb-2 pl-10 pb-3 pr-28">
                        <div class=" rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 pl-2 flex flex-row pt-2">

                            <img class=" max-h-20 rounded-sm mb-2 " src="{{ url('img/games_img/DredgeCape.webp') }}" alt="">
                                <div class="self-center w-96">
                                    <h1 class=" ml-2" > R$ 20,00</h1>
                                    <h1> <span class=" ml-2 text-gray-400" >Jogo base - </span>  Dredge</h1>
                                </div>

                                <div class="flex flex-col self-end items-center pb-2 pr-9 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500" href="">Remover</a>
                                </div>
                        </div>

                        <hr class=" mt-2">
                    </div>

                    <div class=" mb-2 pl-10 pb-3 pr-28">
                        <div class=" rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 pl-2 flex flex-row pt-2">

                            <img class=" max-h-20 max-w-20 rounded-sm mb-2 " src="{{ url('img/games_img/CelesteCape.png') }}" alt="">
                                <div class="self-center w-96">
                                    <h1 class=" ml-2" > R$ 20,00</h1>
                                    <h1> <span class=" ml-2 text-gray-400" >Jogo base - </span>  Celeste</h1>
                                </div>

                                <div class="flex flex-col self-end items-center  pb-2 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500 " href="">Remover</a>
                                </div>
                        </div>

                        <hr class=" mt-2">
                    </div>
                </div>

            </div>



            <div class=" flex flex-col h-60 ">

                <div class=" flex flex-col items-center mt-10">
                    <h1 class="underline underline-offset-4  text-lg  mt-10"> Valor Total: <span class=" text-lg text-red-300 "> R$80,00 </span>  </h1>
                </div>

                <div class=" flex flex-row mt-8 justify-center ">
                    <div class="  ">
                        <x-button class=" h-12 w-32" > Comprar </x-button>
                    </div>

                    <div class=" ml-7">
                        <x-button class=" h-12 w-32" > Presentear </x-button>
                    </div>

                </div>

            </div>

        </div>





        <div class=" md:border-l-2  md:mt-20 flex flex-col w-full md:w-5/12  border-0 border-main-500 pl-2 mt-5 text-white">


            <div class=" flex flex-col h-full p-10">
                <h1 class=" self-center text-xl">Recomendado para você</h1>
                <div class=" p-1 rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 mb-4">
                    <img class="rounded-sm" src="{{ url('img/games_img/OriBanner.jpg') }}" alt="">
                    <div class=" bg-opacity-20 rounded-sm bg-slate-900" >
                        <h1 class="text-lg" >R$30,00   <span class=" text-sm line-through text-gray-500 "> R$50,00 </span>  </h1>
                    </div>

                </div>

                <div class=" p-1 rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 mb-4">
                    <img class="rounded-sm" src="{{ url('img/games_img/CelesteBanner.jpeg') }}" alt="">
                    <div class=" bg-opacity-20 rounded-sm bg-slate-900" >
                        <h1 class="text-lg" >R$30,00   <span class=" text-sm line-through text-gray-500 "> R$50,00 </span>  </h1>
                    </div>

                </div>

            </div>

        </div>
    </div>






</x-app-layout>
