<x-app-layout>
    <script 
        type="text/javascript" 
        src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js">
    </script>
    <script>
        function carregar() {
            PagSeguroDirectPayment.setSessionId('{{ $sessionID }}');
        }

        $(function () {
            $('.numero-cartao').on('blur', function() {
                PagSeguroDirectPayment.onSenderHashReady(function(response) {
                    if (response.status === 'error') {
                        console.log('====================================');
                        console.log(response.message);
                        console.log('====================================');

                        return false;
                    }                

                    let hash = response.senderHash;     
                    $('.hashSeller').val(hash);
                });

                let numeroCartao = $(this).val(); 

                $('.bandeira').val('');

                if (numeroCartao.length > 6) {
                    let prefixCartao = numeroCartao.substr(0, 6); 
                    
                    PagSeguroDirectPayment.getBrand({
                        cardBin : prefixCartao,
                        success : function(response) {
                            $('.bandeira').val(response.brand.name);
                        },
                        error   : function() {
                            alert("Numero do Cartão Inválido");
                        }
                    });
                }
            });

            $('.parcelas').on('blur', function() {
                let bandeira = $('.bandeira').val();
                let totalParcelas = $(this).val();

                if (bandeira == "") {
                    alert("Preencha o número de cartão válido");
                    return; 
                }

                PagSeguroDirectPayment.getInstallments({
                    amount : $('.valor-total"').val(),
                    maxInstallmentsNoInterest : 2,
                    brand : bandeira, 
                    success : function(response) {
                        console.log('====================================');
                        console.log(response); 
                        console.log('====================================');

                        let status = response.error;

                        if (status) {
                            alert('Não foi encontrado opções de parcelamento'); 
                            return
                        }

                        let indice = totalParcelas - 1;
                        let totalApagar = response.installments[bandeira][indice].totalAmount; 
                        let valorTotalParcela = response.installments[bandeira][indice].installmentAmount; 

                        $('.total-parcela').val(valorTotalParcela);  
                        $('.total-apagar').val(totalApagar);
                    }
                });
            }); 

            $('.pagar').on('click', function() {
                let numeroCartao = $('.numero-cartao').val();                
                let inicioCartao = numeroCartao.substr(0, 6);
                let cvv          = $('.cvv').val();
                let anoExpiracao = $('.ano-expiracao').val();
                let mesExpiracao = $('.mes-expiracao').val();
                let hashSeller   = $('.hashSeller').val();
                let bandeira     = $('.bandeira').val();

                PagSeguroDirectPayment.createCardToken({
                    cardNumber : numeroCartao,
                    brand : bandeira,  
                    cvv : cvv,
                    expirationMonth : mesExpiracao,
                    expirationYear : anoExpiracao,

                    success : function(response) {                        
                        console.log('====================================');
                        console.log(response);
                        console.log('====================================');

                        $.post('{{ route("shop.checkout") }}', {
                            hashSeller   : hashSeller,
                            cardToken    : response.card.token,
                            nparcela     : $('.parcelas').val(), 
                            totalApagar  : $('.total-apagar').val(),
                            totalParcela : $('.total-parcela').val(),  
                        }, function(result) {
                            alert(result);
                        });
                    },
                    error   : function(err) {
                        alert('Não pode buscar o Token do Cartão, verifique todos os campos');

                        console.log('====================================');
                        console.log(err);
                        console.log('====================================');
                    }
                })
            });             
        });
    </script>

@php
    $total = 0;
@endphp
@if (isset($shopcart) && count($shopcart) > 0)                     
    @foreach ($shopcart as $item)
    <div class=" mb-2 pl-10 pb-3 pr-28">
        <div class=" rounded-md border-2 border-slate-900 hover:border-red-500 ease-in-out duration-150 pl-2 flex flex-row pt-2">
            <div class="self-center w-96">
                <h1 class=" ml-2" >R$ {{ $item->price }}</h1>
                <h1> <span class=" ml-2 text-gray-400" >{{ $item->title }}</h1>
            </div>
        </div>
        <hr class=" mt-2">
    </div>
    @php
        $total += $item->price;
    @endphp
    @endforeach
@endif  


    <form action="" method="">
        @csrf

        <input
            type="hidden"
            name="hashSeller"
            class="hashSeller"
        />

        <input
            type="hidden"
            name="bandeira"
            class="bandeira"
        />

        <div>
            Numero do Cartão de Crédito:
            <x-input 
                type="text" name="numero-cartao"
                class="numero-cartao"
            />
        </div>

        <div>
            CVV:
            <x-input 
                type="text" name="cvv"
                class="cvv"
            />
        </div>

        <div>
            Mês de Expiração:
            <x-input 
                type="text" name="mes-expiracao"
                class="mes-expiracao"
            />
        </div>

        <div>
            Ano de Expiração:
            <x-input 
                type="text" name="ano-expiracao"
                class="ano-expiracao"
            />
        </div>

        <div>
            Nome do Cartão:
            <x-input 
                type="text" name="nome-cartao"
                class="nome-cartao"
            />
        </div>

        <div>
            Parcelas:
            <x-input 
                type="text" name="parcelas"
                class="parcelas"
            />
        </div>
        
        <div>
            Valor Total:
            <x-input 
                type="text" name="valor-total"
                class="valor-total"
                value="{{ $total }}"
            />
        </div>

        <div>
            Valor da Parcela:
            <x-input 
                type="text" name="total-parcela"
                class="total-parcela"
            />
        </div>

        <div>
            Total a pagar:
            <x-input 
                type="text" name="total-apagar" 
                class="total-apagar" 
                @readonly(true)
            /> 
        </div>

        <x-input 
            type="button" value="Pagar"
            class="pagar"
        />
    </form>
 
</x-app-layout>