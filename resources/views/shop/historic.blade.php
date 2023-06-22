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
            </tr>
        @endforeach
    </table>
</x-app-layout>
