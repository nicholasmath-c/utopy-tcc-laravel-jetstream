<x-app-layout>
    <div class="flex justify-between ">
        <h1 class="pl-10 font-heading text-3xl text-white mb-12 ">Meu Carrinho</h1>
    </div>

    <div class="mb-12 flex flex-col md:flex-row max-w-7xl mx-auto max-h-screen">
        <div class="flex flex-col md:w-7/12 w-full text-white">
            <div class=" flex flex-col w-50 overflow-auto scrollbar-hide">
                @php
                    $total = 0;
                @endphp

                @if (isset($shopcart) && count($shopcart) > 0)
                    @foreach ($shopcart as $item)
                        <div class="mb-15 pl-10 pb-3 pr-28">
                            <div
                                class="rounded-md border-2 p-2 bg-slate-800 border-slate-800 hover:border-red-500 ease-in-out duration-150  flex flex-row ">

                                <div class="flex flex-cojustify-center h-62 w-52">

                                    <img
                                        class="object-contain  mt-2 rounded-sm"
                                        src="{{ url("storage/games/$games->title/$games->cover") }}"
                                        alt="{{ $item->title }}"
                                    />

                                </div>

                                <div class=" w-96">
                                    <div class=" pt-6 w-52">
                                        <x-button class="ml-5 h-6 w-15">
                                            {{ $games->genreGame->name }}
                                        </x-button>
                                        <h1 class=" m-2 mb-15 ml-5 text-white-400 text-xl font-bold">{{ $games->title }}
                                        </h1>
                                    </div>
                                </div>

                                <div class="flex flex-col self-end items-center pt-6 pb-2 ">
                                    <h1 class=" mr-8 text-gray-500 text-lg line-through ">R${{ $item->price }}</h1>
                                    <h1 class="  mr-8 ml-2 text-2xl ">R${{ $games->final_price }}</h1>
                                    <form action="{{ route('shopcart.destroy', $item->shopcart_id) }}" method="GET"
                                        class="delete inline-block ml-2">
                                        @csrf

                                        <button
                                            type="submit"
                                            class=" mt-10 text-sm underline text-gray-500 hover:text-red-500 mr-2 "
                                        >
                                            Excluir
                                        </button>
                                    </form>
                                    <hr class=" mt-2">
                                </div>
                            </div>
                        </div>
                        @php
                            $total += $item->price;
                        @endphp
                    @endforeach
                @endif
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
                            <form class="form-horizontal" method="POST" action="{{ route('shopcart.checkout') }}">
                                @csrf

                                <x-button class="h-55 w-55">Comprar</x-button>
                            </form>
                        </div>

                        <span style="margin-left: 10px;"></span>

                        <a href="{{ route('shop') }}">
                            <x-button class="h-55 w-50">Continuar comprando</x-button>
                        </a>
                    </div>
                </div>
                <h1 class="self-center text-xl mt-10">Recomendado para você</h1>
                <div
                    class="p-1 rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 mb-4">
                    <img class="rounded-sm" src="{{ url('storage/games/Ori and the Blind Forest/Ori-Banner.jpg') }}"
                        alt="">
                    <div class="bg-opacity-20 rounded-sm bg-slate-900">
                        <h1 class="text-lg">R$20,00 <span class="text-sm line-through text-gray-500">R$50,00</span></h1>
                    </div>
                </div>
                <div
                    class="p-1 rounded-md border-2 border-slate-800 hover:border-red-500 ease-in-out duration-150 mb-4">
                    <img class="rounded-sm" src="{{ url('storage/games/Celeste/Celeste-Banner.jpeg') }}" alt="">
                    <div class="bg-opacity-20 rounded-sm bg-slate-900">
                        <h1 class="text-lg">R$20,00 <span class="text-sm line-through text-gray-500">R$50,00</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
