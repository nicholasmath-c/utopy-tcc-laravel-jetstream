<x-app-layout>
    <script 
        type="text/javascript" 
        src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js">
    </script>
    function carregar() {

    }

    <form action="" method="">
        @csrf

        <div>
            Cartão de Crédito:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <div>
            CVV:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <div>
            Mês de Expiração:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <div>
            Ano de Expiração:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <div>
            Nome do Cartão:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <div>
            Parcelas:
            <x-input 
                type="text" name="ncredito"
            />
        </div>
        
        <div>
            Cartão de Crédito:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <div>
            Valor da Parcela:
            <x-input 
                type="text" name="ncredito"
            />
        </div>

        <x-input 
            type="button" value="Pagar"
        />
    </form>

</x-app-layout>