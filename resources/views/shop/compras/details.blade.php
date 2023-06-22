<table>
    <th>Produto</th>
    <th>Quantidade</th>
    <th>Valor</th>

    @foreach ($lista_itens as $item)
    <tr>
        <td>{{ $item->nome  }}</td>
        <td>{{ $item->quantidade  }}</td>
        <td>{{ $item->valorItem }}</td>
    </tr>
    @endforeach
</table>
