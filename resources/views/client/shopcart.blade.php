<x-app-layout>


    <div class="flex justify-between mt-10">
        <h1 class=" pl-10 pt- font-he1ading text-3xl text-white mb-12 ">Meu Carrinho</h1>
        

      </div>



    <div class=" mb-12 flex flex-col md:flex-row max-w-7xl mx-auto  ">


        <div class="flex flex-col md:w-7/12 w-full text-white">

            <div class=" flex h-80   items-center ">

                <div class=" flex flex-col h-96 w-50 overflow-auto scrollbar-hide  ">

                <div class="mb-10 pl-10 pb-3 pr-28">
                        <div class="rounded-md border-2 bg-gray-900 border-slate-600 hover:border-red-500 ease-in-out duration-150 pl-3 flex flex-row pt-5">
                            <img class="max-h-36 rounded-sm mb-4" src="{{ url('img/games_img/CelesteCape.png') }}" alt="">
                            <div class="self-center w-96">
                            <x-button class="ml-3 mb-2 h-6 w-15">JOGO BASE</x-button>
                            <div style="display: flex; flex-direction: row; align-items: center;">
                                <h1 class="mb-10 ml-3 text-white-400 text-xl font-bold" style="margin-right: 10px;">Celeste</h1>


                                <div class=" flex flex-col justify-end items-end pr-6 pb-2 h-full min-w-fit max-w-xs ">

                                    <div class="">
                                        <h1 class=" text-gray-500 text-lg line-through ">R$40,00</h1>
                                    </div>

                                    <div class="">
                                        <h1 class="  ml-40  text-2xl ">R$20,00</h1>
                                    </div>

                                    </div>
                            </div>
                            
                             
                            
                            </div>

                                <div class="flex flex-col self-end items-center  pb-2 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500 mr-5 " href="">Remover</a>
                                </div>
                        </div>

                        
                    </div>

                    <div class="mb-10 pl-10 pb-3 pr-28">
                        <div class="rounded-md border-2 border-slate-600 hover:border-red-500 ease-in-out duration-150 pl-3 flex flex-row pt-5">
                            <img class="max-h-36 rounded-sm mb-4" src="{{ url('img/games_img/silksong.webp') }}" alt="">
                            <div class="self-center w-96">
                                <h1 class="mb-15 ml-3 text-white-400 text-xl font-bold">Silksong</h1>
                                <x-button class="mb-20 ml-3 h-6 w-15">JOGO BASE</x-button>
                                <h1 class="ml-2">R$ 20,00</h1>
                            </div>

                                <div class="flex flex-col self-end items-center pb-2 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500 mr-5 " href="">Remover</a>
                                </div>
                        </div>

                        
                    </div>

                    <div class="mb-10 pl-10 pb-3 pr-28">
                        <div class="rounded-md border-2 border-slate-600 hover:border-red-500 ease-in-out duration-150 pl-3 flex flex-row pt-5">
                            <img class="max-h-36 rounded-sm mb-4" src="{{ url('img/games_img/DredgeCape.webp') }}" alt="">
                            <div class="self-center w-96">
                                <h1 class="mb-15 ml-3 text-white-400 text-xl font-bold">Dreadge</h1>
                                <x-button class="mb-20 ml-3 h-6 w-15">JOGO BASE</x-button>
                                <h1 class="ml-2">R$ 20,00</h1>
                            </div>

                                <div class="flex flex-col self-end items-center pb-2 ">
                                   <a class=" text-sm underline text-gray-500 hover:text-red-500 mr-5 " href="">Remover</a>
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





        </div>

<div class="md:border-l-2 md:mt-1 flex flex-col w-full md:w-5/12 border-0 border-main-500 pl-2 text-white mt-0">
    <div class="flex flex-col h-full p-5 mt-0">
        <div class="flex flex-col h-70">
            <div class="flex flex-col items-left mt-1 ">
                    <h1 class="pl-10 pt-0 font-heading text-2xl text-white mt-0 ">Resumo de Jogos e Aplicativos</h1>
                <div class="flex justify-between mt-10 ">
                    <h1 class="text-lg mt-3">Preço</h1>
                    <h1 class="text-lg mt-3"><span class="text-lg text-red-300">R$ 80,00</span></h1>
                </div>
                <div class="flex justify-between ">
                    <h1 class="text-lg mt-3">Desconto</h1>
                    <h1 class="text-lg mt-3"><span class="text-lg text-red-300">R$ 30,00</span></h1>
                </div>
                <div class="flex justify-between mt-4 border-t">
                    <h1 class="text-lg mt-4">Subtotal</h1>
                    <h1 class="text-lg mt-4"><span class="text-lg text-red-300">R$ 80,00</span></h1>
                </div>
            </div>
            <div class="flex flex-row mt-8 justify-center ">
                <div>
                    <x-button class="h-55 w-55">Finalizar Compra</x-button>
                   
                </div>

                <span style="margin-left: 10px;"></span>

                <div>
                <x-button class="h-55 w-50">Continuar comprando</x-button> 

                </div>
                
            </div>
        </div>
        <h1 class="self-center text-xl mt-10">Recomendado para você</h1>
        <div class="p-1 rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 mb-4">
            <img class="rounded-sm" src="{{ url('img/games_img/OriBanner.jpg') }}" alt="">
            <div class="bg-opacity-20 rounded-sm bg-slate-900">
                <h1 class="text-lg">R$20,00   <span class="text-sm line-through text-gray-500">R$50,00</span></h1>
            </div>
        </div>
        <div class="p-1 rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 mb-4">
            <img class="rounded-sm" src="{{ url('img/games_img/CelesteBanner.jpeg') }}" alt="">
            <div class="bg-opacity-20 rounded-sm bg-slate-900">
                <h1 class="text-lg">R$20,00   <span class="text-sm line-through text-gray-500">R$50,00</span></h1>
            </div>
        </div>
    </div>
</div>


        </div>

    </div>






</x-app-layout>
