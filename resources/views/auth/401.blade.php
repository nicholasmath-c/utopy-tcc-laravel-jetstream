<x-simplelay-layout>
    <div class="flex flex-row justify-center">

        <div class="py-14">
            <img src="{{ url('img\utopy\floatingIsland.png') }}" alt=""
                class="  animate-updown ease-in-out self-center">
        </div>

        <div class="flex flex-col items-center pt-56 w-2/5 ">

            <div class="font-heading text-4xl text-slate-700 mb-2">
                401
            </div>

            <div class="font-heading text-4xl text-main-500 mb-10">
                Oops... algo deu errado
            </div>

            <div class="text-xl mb-10">
                Você não possui autorização para acessar essa página
            </div>

            <a class="flex items-center px-3 py-2 text-slate-200 transition-colors duration-300 transform rounded-lg w-32 justify-center hover:bg-main-500"
                href="{{ route('home') }}">
                <svg class="fill-slate-200 h-5 w-5" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                    viewBox="0 0 100 100" x="0px" y="0px">
                    <title>UI_Essentials</title>
                    <polygon points="67.36 93.98 23.42 49.99 67.39 6.02 76.58 15.21 41.8 50 76.56 84.79 67.36 93.98" />
                    <text x="0" y="115" fill="#000000" font-size="5px" font-weight="bold"
                        font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">
                </svg>

                <span class="mx-2 text-sm font-medium">Voltar</span>
            </a>
        </div>
    </div>
</x-simplelay-layout>
