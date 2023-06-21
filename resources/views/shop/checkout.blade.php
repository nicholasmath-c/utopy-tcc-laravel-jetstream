<x-app-layout>
    <form name="FormPagamento" id="FormPagamento" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html" method="get">
        <input type="hidden" name="code" id="code" value="{{ $code->code }}" />
        <input type="hidden" name="iot" value="button" />
        <input id="BotaoPagamento" type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/209x48-pagar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
    </form>

    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
    <script type="text/javascript" src="https://zeptojs.com/zepto.min.js"></script>
    
    @php
        var_dump($code)
    @endphp

    <script>
    </script>
</x-app-layout>