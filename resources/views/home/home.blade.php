<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
                    <!--Carousel indicators-->
                    <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                        data-te-carousel-indicators>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                            data-te-carousel-active
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 2"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 3"></button>
                    </div>

                    <!--Carousel items-->
                    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                        <!--First item-->
                        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                            <img src="{{url("img/games_img/SilkSongBanner.jpg")}}"
                                class="block w-full" alt="..." />
                            <div class="absolute left-[35%] bottom-5 hidden py-5 text-center text-white md:block ">
                                <h5 class="text-xl w-96 align-center">Hornet, princesa protetora de Hallownest, encontra-se sozinha em um
                                    mundo vasto e desconhecido.</h5>
                            </div>

                        </div>
                        <!--Second item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item style="backface-visibility: hidden">
                            <img src="{{url("img/games_img/OriBanner.jpg")}}"
                                class="block w-full" alt="..." />
                            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                <h5 class="text-xl">Ori and the Blind Forest conta a história de um jovem órfão
                                    destinado ao heroísmo</h5>
                            </div>
                        </div>
                        <!--Third item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item style="backface-visibility: hidden">
                            <img src="{{url("img/games_img/Capa_Jogos_indies.jpg")}}"
                                class="block w-full" alt="..." />
                            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                <h5 class="text-xl">Ajude Madeline a sobreviver à sua jornada para o topo da Montanha Celeste</h5>
                            </div>
                        </div>
                    </div>

                    <!--Carousel controls - prev item-->
                    <button
                        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
                    </button>
                    <!--Carousel controls - next item-->
                    <button
                        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Proxima</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="bg-slate">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">
                <h2 class=" mb-4 text-2xl font-bold tracking-tight text-white">Ultimos lançamentos</h2>

              <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{url("img/games_img/silksong.webp")}}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                  </div>
                  <h2 class="mt-2 text-base text-gray-400">Jogo base</h2>
                  <h3 class="mt-3 text-lg text-white">SilkSong</h3>
                  <p class="mt-1 text-lg font-medium text-white">$20</p>
                </a>
                <a href="#" class="group">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{url("img/games_img/OriAndTheBlindForest.jpg")}}" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                  </div>
                  <h2 class="mt-2 text-base text-gray-400"> Jogo base </h2>
                  <h3 class="mt-3 text-lg text-white">Ori and the Blind Forest</h3>
                  <p class="mt-1 text-lg font-medium text-white">$30</p>
                </a>
                <a href="#" class="group">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{url("img/games_img/CelesteCape.png")}}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                  </div>
                  <h2 class="mt-2 text-base text-gray-400"> Jogo Base </h2>
                  <h3 class="mt-3 text-lg text-white">Celeste</h3>
                  <p class="mt-1 text-lg font-medium text-white">$89</p>
                </a>
                <a href="#" class="group">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{url("img/games_img/DredgeCape.webp")}}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                  </div>
                  <h2 class="mt-2 text-base text-gray-400"> Jogo base </h2>
                  <h3 class="mt-3 text-lg text-white">Dredge</h3>
                  <p class="mt-1 text-lg font-medium text-white">$25</p>
                </a>

                <!-- More products... -->
              </div>
            </div>
          </div>


    </div>
</x-app-layout>



<script>
    import {
        Carousel,
        initTE,
    }
    from "tw-elements";

    initTE({
        Carousel
    });
</script>
