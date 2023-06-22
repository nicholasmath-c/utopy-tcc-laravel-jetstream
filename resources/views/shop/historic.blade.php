<x-app-layout>
    <h2>Minhas Compras</h2>

    <table>
        <tr>
            <th>Data Compra</th>
            <th>Situação</th>
            <th>Jogo</th>
            <th>Valor</th>            
        </tr>
        @if(isset($$lista_pedidos) && isset($lista_itens))
            @foreach ($lista_pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->getDataPedidoFormatada() }}</td>
                    <td>{{ $pedido->statusDescricao() }}</td>
                </tr>
            @endforeach
            @foreach ($lista_itens as $item)
                <tr>
                    <td>{{ $item->title) }}</td>
                    <td>{{ $item->valorItem }}</td>
                </tr>
            @endforeach
        @endif

        Sem  Itens
    </table>
</x-app-layout>
