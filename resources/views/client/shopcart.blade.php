<x-app-layout>

    <div class=" flex flex-col-2 max-w-7xl mx-auto sm:px-6 lg:px-8 ">

        <div class="flex flex-col w-7/12 text-white">

            <div class=" flex h-96 items-end ">
                <div class=" flex flex-col h-72 w-full overflow-auto scrollbar-hide">

                    @php
                        $total = 0;
                    @endphp
                    @foreach ($shopcart as $item)
                    <div class=" mb-2 pl-10 pb-3 pr-28">
                        <div class=" rounded-md border-2 border-slate-900 hover:border-red-500 ease-in-out duration-150 pl-2 flex flex-row pt-2">
                            <img class=" max-h-20 rounded-sm mb-2 " src="{{ url('img/games_img/' . $item->image) }}" alt="">

                            <div class="self-center w-96">
                                <h1 class=" ml-2" >R$ {{ $item->price }}</h1>
                                <h1> <span class=" ml-2 text-gray-400" >{{ $item->title }}</h1>
                            </div>

                            <div class="flex flex-col self-end pb-2 ">
                               <a class=" text-sm underline text-gray-500 hover:text-red-500 " href="{{ route('shopcart.destroy', $item->id) }}">
                                    Remover
                                </a>
                            </div>
                        </div>

                        <hr class=" mt-2">
                    </div>
                    @php
                        $total += $item->price;
                    @endphp
                    @endforeach
                </div>
            </div>

            <div class=" flex flex-row h-60 ">

                <div>
                    <h1 class="underline text-lg ml-10 mt-10">
                        Valor Total: <span class=" text-lg text-red-300 ">R${{ $total }}</span>
                    </h1>
                </div>

                <div class=" mt-6 ml-72">
                    <form class="form-horizontal" method="POST" action="{{ route('shopcart.checkout') }}">
                        @csrf

                        <button class="h-14 w-32 mb-3 mt-2">
                            Comprar
                        </button>
                    </form>
                    <x-button class=" h-14 w-32" > Presentear </x-button>
                </div>

            </div>

        </div>


        <div class=" flex flex-col w-96 border-l-2 border-main-500 pl-2 mt-20  text-white">
            <div class=" flex flex-col h-full p-10">
                <h1 class=" self-center text-xl">Recomendado para você</h1>
                <div>
                    <img class="rounded-sm" src="{{ url('img/games_img/OriBanner.jpg') }}" alt="">
                    <div class=" rounded-sm bg-slate-800" >
                        <h1 class="text-lg" >R$30,00</h1>
                    </div>

                </div>

            </div>

        </div>
    </div>





























</x-app-layout>
