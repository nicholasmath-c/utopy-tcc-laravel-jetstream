<x-app-layout>

    <div class="w-full h-[500px] flex justify-center items-center">

        <form name="FormPagamento" id="FormPagamento" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html" method="get">
            <input type="hidden" name="code" id="code" value="{{ $code->code }}" />
            <input type="hidden" name="iot" value="button" />
            <x-button
                id="BotaoPagamento"
                name="submit"
                class="h-[100px]">
                Pague com PagSeguro - é rápido, grátis e seguro!
            </x-button>
        </form>

    </div>

    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
    <script type="text/javascript" src="https://zeptojs.com/zepto.min.js"></script>

    {{-- {{ $produtos }} --}}
    {{-- @php
        $total = 0
    @endphp

    @foreach ($produtos as $item)
        <p>
            {{ $item->short_description }}

            @php
            $total += $item->final_price
            @endphp
    @endforeach
    </p>
    <br>
    Preco total {{ $total }} --}}

    {{-- @php
    var_dump($code)
    @endphp --}}

    <script>
    </script>
</x-app-layout>
