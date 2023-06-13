<h2>Minhas Compras</h2>

<table>
    <tr>
        <th>Data Compra</th>
        <th>Situação</th>
        <th></th>
    </tr>
    @foreach ($lista_pedido as $pedido)
    <tr>
        <th>{{ $pedido->data_pedido->format('d/m/Y H:i') }}</th>
        <th>{{ $pedido->statusDescricao }}</th>
        <th></th>
    </tr>
    @endforeach
</table>
