<x-app-layout>
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
</x-app-layout>
