<x-app-layout>
    <div class="  relative ">

        <div class=" relative ">
            <div class=" ">
                <img src="\games\Cuphead\Cuphead-Banner.png" alt="">
                <div class="absolute top-0 ">
                    <img src="\img\utopy\background-shop.png" alt="">
                </div>
            </div>

            <div class=" flex flex-col-3 items-center w-full absolute top-36   ">
                <div class=" w-[440px] ml-8">
                    <img class=" rounded-lg " src="\games\Cuphead\Cuphead-Cover.png" alt="">
                </div>

                <div class=" w-3/5 h-96 pl-5 pt-5 backdrop-blur-md bg-slate-800 bg-opacity-80">
                    <div>
                        <h1 class=" font-heading text-4xl"> <span> Cuphead </span></h1>
                    </div>
                    <div class=" mt-3 grid grid-cols-3 gap-x-1 gap-y-1 p-1 w-80">
                        <div class=" w-full py-[1px]  border-slate-600 rounded-xl bg-slate-800 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                            <p class="text-center">Aventura</p>
                        </div>
                        <div class=" w-full py-[1px]  border-slate-600 rounded-xl bg-slate-800 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                            <p class="text-center">Plataforma</p>
                        </div>
                        <div class=" w-full py-[1px]  border-slate-600 rounded-xl bg-slate-800 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                            <p class="text-center">Bullet Hell</p>
                        </div>
                        <div class=" w-full py-[1px]  border-slate-600 rounded-xl bg-slate-800 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                            <p class="text-center">Bullet Hell</p>
                        </div>
                        <div class=" w-full py-[1px]  border-slate-600 rounded-xl bg-slate-800 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                            <p class="text-center">Aventura</p>
                        </div>
                        <div class=" w-full py-[1px]  border-slate-600 rounded-xl bg-slate-800 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                            <p class="text-center">Aventura</p>
                        </div>

                    </div>

                    <div class=" mt-10">
                        Em "Cuphead", embarque em uma aventura desafiadora e estilizada inspirada nos desenhos animados da década de 1930.
                    </div>

                    <div class=" flex flex-row w-full h-36 justify-end items-end pr-6 pb-4  ">
                        <div>
                            <x-button class="w-52 h-14 text-[18.5px]   "> Ver jogo  </x-button>
                        </div>
                    </div>

                </div>



            </div>

        </div>

    </div>













    <div class=" sticky top-0 flex flex-row justify-center p-3">
        <div class=" p-2 px-[25px] flex flex-row bg-slate-700 bg-opacity-20 rounded-full shadow-md ">
            <div
                class=" p-1  border-slate-600 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                Ação
            </div>

            <div
                class=" p-1  border-slate-600 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                Gratuitos
            </div>

            <div
                class=" p-1  border-slate-600 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                FPS
            </div>

            <div
                class=" p-1  border-slate-600 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                Aventura
            </div>

            <div
                class=" p-1  border-slate-600 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                8-Bits
            </div>

            <div
                class=" p-1  border-slate-600 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                8-Bits
            </div>

            <div
                class=" p-1  border-slate-600 rounded-xl mx-1  my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                8-Bits
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-4">
        @foreach ($game as $games)
            <div
                class="bg-slate-800 flex flex-row items-center shadow-lg mx-16 rounded-md  h-40 p-1 border-slate-800 hover:border-red-500 ease-in-out hover:cursor-pointer hover:transform hover:scale-[102%] duration-300 ">

                <div class=" h-36 w-44 ">
                    <img class=" h-36 w-44 rounded-md " src="{{ url("storage/games/$games->title/$games->cover") }}"
                        alt="">
                </div>

                <div class=" flex flex-col justify-center ml-2 h-full w-full  ">

                    <div class=" mb-1 ">
                        <h1 class=" w-fit hover:underline font-heading  text-2xl ">{{ $games->title }}</h1>
                    </div>

                    <div class=" flex w-fill mb-1 ">

                        <div
                            class=" flex flex- justify-center px-[4px] py-[4px]  mr-1 border-gray-500 rounded-xl bg-slate-600 bg-opacity-25 ">
                            <h1 class="  text-base ">{{ $games->genreGame->name }}</h1>
                        </div>

                        <div
                            class=" flex flex-row justify-center px-[4px] py-[4px]  mr-1 border-gray-500 rounded-xl bg-slate-600 bg-opacity-25 ">
                            <h1 class="  text-base ">Plataforma</h1>
                        </div>

                        <div
                            class=" flex flex-row justify-center px-[4px] py-[4px]  mr-1 border-gray-500 rounded-xl bg-slate-600 bg-opacity-25 ">
                            <h1 class="  text-base ">8-Bits</h1>
                        </div>

                        <div
                            class=" flex flex-row justify-center px-[4px] py-[4px]  mr-1 border-gray-500 rounded-xl bg-slate-600 bg-opacity-25 ">
                            <h1 class="  text-base ">Aventura</h1>
                        </div>

                    </div>

                    <div class=" flex items-center w-fill mb-1   ">
                        <h1 class="mr-5">Lançamento - <span class=" text-lg ">{{ $games->release_date }}</span></h1>
                        <div class="w-9 h-9  ">
                            <img class=" shadow-xl " src="{{ url('/img/classificacoes/classificacao-livre.png') }}"
                                alt="">
                        </div>
                    </div>

                </div>

                <div class=" flex flex-col justify-end items-end pr-6 pb-2 h-full min-w-fit max-w-xs ">

                    @if ($games->discount != 0.0)
                        <div class="">
                            <h1 class=" text-gray-500 text-lg line-through ">R${{ $games->price }}</h1>
                        </div>
                    @endif

                    <div class="">
                        <h1 class=" text-2xl ">R${{ $games->final_price }}</h1>
                    </div>

                </div>

            </div>
        @endforeach

    </div>

    </div>

    </div>

</x-app-layout>
