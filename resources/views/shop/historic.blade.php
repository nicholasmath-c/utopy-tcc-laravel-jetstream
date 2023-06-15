<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(() => {
        $('.info-compra').on('click', function() {
            let id = $(this).attr('data-value');
            $.ajax({
                url: "{{ route('shop.details') }}",
                method: "POST",
                data: {
                    pedido_id: id
                },
                success: function(result) {
                    $('#conteudo-pedido').html(result);
                },
                error: function(xhr, status, error) {
                    // Manipule o erro aqui, se necessário
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>


<h2>Minhas Compras</h2>

<table>
    <tr>
        <th>Data Compra</th>
        <th>Situação</th>
        <th></th>
    </tr>
    @foreach ($lista_pedidos as $pedido)
        <tr>
            <td>{{ $pedido->getDataPedidoFormatada() }}</td>
            <td>{{ $pedido->statusDescricao() }}</td>
            <td>
                <div class="w-full flex justify-center py-12" id="button">
                    <button
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm info-compra"
                        onclick="modalHandler(true)" data-value="{{ $pedido->id }}">
                        <i class="fas fa-shopping-basket"></i>
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
</table>



<dh-component>

    <div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
        id="modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <div class="w-full flex justify-start text-gray-600 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52"
                        height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path
                            d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                    </svg>
                </div>
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">
                    Detalhes do Pedido
                </h1>

                <div class="flex items-center justify-start w-full">
                    <div id="conteudo-pedido">
                    </div>
                </div>

                <div class="flex items-center justify-start w-full">
                    <button
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm"
                        onclick="modalHandler()">Fechar</button>
                </div>
                <button
                    class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600"
                    onclick="modalHandler()" aria-label="close modal" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20"
                        height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        let modal = document.getElementById("modal");

        function modalHandler(val) {
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>

</dh-component>
