<x-app-layout>
    @include('components.messages')

    <h1 class=" text-white text-4xl font-heading font-bold">{{ $game->title }}</h1>


    <div class="flex flex-col-2 mt-10">
        <div class="max-w-4xl pr-7">
            <img class=" rounded-md mr-60" src="{{ url("storage/games/{$game->title}/{$game->banner}") }}">
            <div class="mt-10">
                <h1 class=" text-2xl ">Sobre este jogo</h1>

                <p class="mt-8 text-lg text-justify">
                    {!! $game->long_description !!}
                </p>
            </div>
        </div>

        <div class="border-l-4 border-main-500 rounded-sm pl-7">
            <img class="max-w-xs rounded-md " src="{{ url("storage/games/{$game->title}/{$game->cover}") }}">
            <div class="pt-4">
                <div class="flex flex-col-2 text-lg">
                    <p class="text-gray-500 w-full">Desenvolvedor</p>
                    <p class="w-full"> {{ $developer->user->firstname }} {{ $developer->user->lastname }} ({{ $developer->user->nickname }})</p>
                </div>
                <hr class="my-4">
                <div class="flex flex-col-2 text-lg">
                    <p class="text-gray-500 w-full">Categoria</p>
                    <p class="w-full"> {{ $game->genreGame->name }} </p>
                </div>
                <div class="mt-10">
                    @if(isset($admission))
                        <a href="{{route("developer.admissions.game-download", $game->id)}}"><x-button class="w-full h-16"> Baixar Jogo </x-button></a>
                    @else
                    @if (App\Models\Shopcart::jogoNoCarrinho($game->id))
                    <form action="{{ route('shopcart.store', $game->id) }}" method="post">
                        @csrf

                        <x-input
                            type="hidden"
                            name="game_id"
                            value="{{ $game->id }}" />

                        <x-label class="text-white text-lg" style="display: none;">
                            Quantidade:
                        </x-label>
                        <x-input
                            type="hidden"
                            name="quantity"
                            value="1"
                            required
                        />

                        <x-button class="w-full h-16">
                            <i class="fa fa-cart-plus" aria-label="Adicionar ao Carrinho" aria-hidden="true">
                            </i>
                        </x-button>
                    </form>

                    <x-button class="mt-4 w-64 h-16 text-white text-lg">
                        Comprar Jogo
                    </x-button>
                    @endif
                </div>
            </div>

            <div class=" w-full mt-10">
                <div class=" max-w-fit ">
                    <div class=" max-w-full ">
                        <p class=" text-xl font-heading mb-4">
                            Requisitos minimos
                        </p>

                        <div class="flex flex-col gap-2 text-slate-400 text-lg">
                            <p>
                                Sistema operacional - <span class="text-white">{{ $rm->os }}</span>
                            </p>

                            <p>
                                CPU - <span class="text-white">{{ $rm->cpu }}</span>
                            </p>

                            <p>
                                GPU - <span class="text-white">{{ $rm->gpu }}</span>
                            </p>

                            <p>
                                RAM - <span class="text-white">{{ $rm->ram }}</span>
                            </p>

                            <p>
                                Armazenamento - <span class="text-white">{{ $rm->storage }}</span>
                            </p>
                        </div>

                    </div>

                    <div class="mt-7">
                        <p class=" text-xl font-heading mb-4 ">
                            Requisitos Recomendados
                        </p>

                        <div class="flex flex-col gap-2 text-slate-400 text-lg">
                            <p>
                                Sistema operacional - <span class="text-white">{{ $rr->os }}</span>
                            </p>

                            <p>
                                CPU - <span class="text-white">{{ $rr->cpu }}</span>
                            </p>

                            <p>
                                GPU - <span class="text-white">{{ $rr->gpu }}</span>
                            </p>

                            <p>
                                RAM - <span class="text-white">{{ $rr->ram }}</span>
                            </p>

                            <p>
                                Armazenamento - <span class="text-white">{{ $rr->storage }}</span>
                            </p>
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
