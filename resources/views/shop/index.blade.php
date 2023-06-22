<x-app-layout>
    @if ( !request()->routeIs('shop.category') )
    <div class="bg-slate-800  ">
        <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>


            <!--Carousel items-->
            <div class="relative w-full after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[550ms] ease-in motion-reduce:transition-none"
                    data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                    <div class="">
                        <div class=" relative ">
                            <div class=" ">
                                <img src="storage\games\{{ $gameCarousel1->title }}\{{ $gameCarousel1->banner }}"
                                    alt="">
                                <div class="absolute top-0 ">
                                    <img src="\img\utopy\background-shop.png" alt="">
                                </div>
                            </div>

                            <div
                                class=" flex flex-col-3 items-center w-full absolute top-28 hover:scale-[105%] duration-200   ">
                                <div class=" w-[440px] ml-8">
                                    <img class=" rounded-lg "
                                        src="storage\games\{{ $gameCarousel1->title }}\{{ $gameCarousel1->cover }}"
                                        alt="">
                                </div>

                                <div class=" rounded-r-xl w-3/5 h-96 pl-5 pt-5 bg-slate-800 bg-opacity-90">
                                    <div class=" w-fit cursor-pointer hover:scale-105 ">
                                        <a
                                            href="{{ route('game-page', ['id' => $gameCarousel1->id, 'title' => $gameCarousel1->title]) }}">
                                            <h1 class=" font-heading text-3xl truncate"> <span>
                                                    {{ $gameCarousel1->title }} </span></h1>
                                        </a>
                                    </div>
                                    <div class=" mt-3 grid grid-cols-3 gap-x-1 gap-y-1 p-1 w-80">
                                        <div
                                            class=" w-full py-[1px] rounded-xl bg-slate-600 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                                            <p class="text-center">{{ $gameCarousel1->genreGame->name }}</p>
                                        </div>
                                    </div>

                                    <div class=" mt-10">
                                        {{ $gameCarousel1->short_description }}
                                    </div>

                                    <div class=" flex flex-row w-full h-36 justify-between items-end pl-3 pr-6 pb-4  ">
                                        <div class=" w-16">
                                            @if ($gameCarousel1->age_rating == 'L')
                                                <img class=" shadow-xl "
                                                    src="{{ url('/img/classificacoes/classificacao-livre.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel1->age_rating == '10+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-10.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel1->age_rating == '12+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-12.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel1->age_rating == '14+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-14.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel1->age_rating == '16+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-16.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel1->age_rating == '18+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-18.png') }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div>
                                            <a
                                                href="{{ route('game-page', ['id' => $gameCarousel1->id, 'title' => $gameCarousel1->title]) }}">
                                                <x-button class="w-52 h-14 text-[18.5px]"> Ver jogo </x-button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[550ms] ease-in motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <div class="">
                        <div class=" relative ">
                            <div class=" ">
                                <img src="storage\games\{{ $gameCarousel2->title }}\{{ $gameCarousel2->banner }}"
                                    alt="">
                                <div class="absolute top-0 ">
                                    <img src="\img\utopy\background-shop.png" alt="">
                                </div>
                            </div>

                            <div
                                class=" flex flex-col-3 items-center w-full absolute top-28 hover:scale-[105%] duration-200   ">
                                <div class=" w-[440px] ml-8 ">
                                    <img class=" rounded-lg "
                                        src="storage\games\{{ $gameCarousel2->title }}\{{ $gameCarousel2->cover }}"
                                        alt="">
                                </div>

                                <div class=" rounded-r-xl w-3/5 h-96 pl-5 pt-5 bg-slate-800 bg-opacity-90">
                                    <div class=" w-fit cursor-pointer hover:scale-105 ">
                                        <a
                                            href="{{ route('game-page', ['id' => $gameCarousel2->id, 'title' => $gameCarousel2->title]) }}">
                                            <h1 class=" font-heading text-3xl truncate"> <span>
                                                    {{ $gameCarousel2->title }} </span></h1>
                                        </a>
                                    </div>
                                    <div class=" mt-3 grid grid-cols-3 gap-x-1 gap-y-1 p-1 w-80">
                                        <div
                                            class=" w-full py-[1px] rounded-xl bg-slate-600 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                                            <p class="text-center">{{ $gameCarousel2->genreGame->name }}</p>
                                        </div>
                                    </div>

                                    <div class=" mt-10">
                                        {{ $gameCarousel2->short_description }}
                                    </div>

                                    <div class=" flex flex-row w-full h-36 justify-between items-end pl-3 pr-6 pb-4  ">
                                        <div class=" w-16">
                                            @if ($gameCarousel2->age_rating == 'L')
                                                <img class=" shadow-xl "
                                                    src="{{ url('/img/classificacoes/classificacao-livre.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel2->age_rating == '10+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-10.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel2->age_rating == '12+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-12.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel2->age_rating == '14+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-14.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel2->age_rating == '16+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-16.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel2->age_rating == '18+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-18.png') }}"
                                                    alt="">
                                            @endif
                                        </div>

                                        <div>
                                            <a
                                                href="{{ route('game-page', ['id' => $gameCarousel2->id, 'title' => $gameCarousel2->title]) }}">
                                                <x-button class="w-52 h-14 text-[18.5px]"> Ver jogo </x-button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[550ms] ease-in motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <div class="">
                        <div class=" relative ">
                            <div class=" ">
                                <img src="storage\games\{{ $gameCarousel3->title }}\{{ $gameCarousel3->banner }}"
                                    alt="">
                                <div class="absolute top-0 ">
                                    <img src="\img\utopy\background-shop.png" alt="">
                                </div>
                            </div>

                            <div
                                class=" flex flex-col-3 items-center w-full absolute top-28 hover:scale-[105%] duration-200   ">
                                <div class=" w-[440px] ml-8">
                                    <img class=" rounded-lg "
                                        src="storage\games\{{ $gameCarousel3->title }}\{{ $gameCarousel3->cover }}"
                                        alt="">
                                </div>

                                <div class=" rounded-r-xl w-3/5 h-96 pl-5 pt-5 bg-slate-800 bg-opacity-90">
                                    <div class=" w-fit cursor-pointer hover:scale-105 ">
                                        <h1 class=" font-heading text-3xl truncate"> <span>
                                                {{ $gameCarousel3->title }} </span></h1>
                                    </div>
                                    <div class=" mt-3 grid grid-cols-3 gap-x-1 gap-y-1 p-1 w-80">
                                        <div
                                            class=" w-full py-[1px] rounded-xl bg-slate-600 bg-opacity-80 hover:bg-main-600 hover:cursor-pointer duration-200">
                                            <p class="text-center">{{ $gameCarousel3->genreGame->name }}</p>
                                        </div>
                                    </div>

                                    <div class=" mt-10">
                                        Em "Cuphead", embarque em uma aventura desafiadora e estilizada inspirada nos
                                        desenhos animados
                                        da década de 1930.
                                    </div>

                                    <div
                                        class=" flex flex-row w-full h-36 justify-between items-end     pl-3 pr-6 pb-4  ">
                                        <div class=" w-16">
                                            @if ($gameCarousel3->age_rating == 'L')
                                                <img class=" shadow-xl "
                                                    src="{{ url('/img/classificacoes/classificacao-livre.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel3->age_rating == '10+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-10.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel3->age_rating == '12+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-12.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel3->age_rating == '14+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-14.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel3->age_rating == '16+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-16.png') }}"
                                                    alt="">
                                            @elseif ($gameCarousel3->age_rating == '18+')
                                                <img class=" shadow-xa "
                                                    src="{{ url('/img/classificacoes/classificacao-18.png') }}"
                                                    alt="">
                                            @endif
                                        </div>

                                        <div>
                                            <a
                                                href="{{ route('game-page', ['id' => $gameCarousel3->id, 'title' => $gameCarousel3->title]) }}">
                                                <x-button class="w-52 h-14 text-[18.5px]"> Ver jogo </x-button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Carousel controls - prev item-->
            <button
                class="absolute h-36 mt-64 ml-7 bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center  border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
            </button>
            <!--Carousel controls - next item-->
            <button
                class="absolute h-36 mt-64 bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-end border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Proxima</span>
            </button>
        </div>
    </div>
@endif

    <div class="sticky top-0 flex flex-row justify-center p-3">
        <div class=" p-2 px-[25px] flex flex-row bg-slate-700 bg-opacity-20 rounded-full shadow-md w-fit">
            @foreach ($genreGame as $genreGames)
            <form action="{{ route('shop.category', $genreGames->id) }}">
                <button type="submit"
                    class="p-1 rounded-xl mx-1 my-[1px] px-3 bg-slate-500 bg-opacity-20 hover:bg-main-600 hover:cursor-pointer duration-200">
                    {{ $genreGames->name }}
                </button>
            </form>
            </a>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col gap-4">
        @foreach ($game as $games)
            <a href="/shop/game/{{ $games->id }}/{{ $games->title }}">
                <div
                    class="border-2 bg-slate-800 flex flex-row items-center shadow-lg mx-16 rounded-md  h-40 p-1 border-slate-800 hover:border-red-500 ease-in-out hover:cursor-pointer hover:transform hover:scale-[102%] duration-300 ">


                    <div class=" h-36 w-44 ">
                        <img class=" h-36 w-44 rounded-md "
                            src="{{ url("storage/games/$games->title/$games->cover") }}" alt="">
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

                        </div>

                        <div class=" flex items-center w-fill mb-1   ">
                            <h1 class="mr-5">Lançamento - <span class=" text-lg ">{{ $games->release_date }}</span>
                            </h1>
                            <div class="w-9 h-9  ">
                                @if ($games->age_rating == 'L')
                                    <img class=" shadow-xl "
                                        src="{{ url('/img/classificacoes/classificacao-livre.png') }}"
                                        alt="">
                                @elseif ($games->age_rating == '10+')
                                    <img class=" shadow-xa "
                                        src="{{ url('/img/classificacoes/classificacao-10.png') }}" alt="">
                                @elseif ($games->age_rating == '12+')
                                    <img class=" shadow-xa "
                                        src="{{ url('/img/classificacoes/classificacao-12.png') }}" alt="">
                                @elseif ($games->age_rating == '14+')
                                    <img class=" shadow-xa "
                                        src="{{ url('/img/classificacoes/classificacao-14.png') }}" alt="">
                                @elseif ($games->age_rating == '16+')
                                    <img class=" shadow-xa "
                                        src="{{ url('/img/classificacoes/classificacao-16.png') }}" alt="">
                                @elseif ($games->age_rating == '18+')
                                    <img class=" shadow-xa "
                                        src="{{ url('/img/classificacoes/classificacao-18.png') }}" alt="">
                                @endif
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
            </a>
        @endforeach

    </div>

    </div>

    </div>

</x-app-layout>
