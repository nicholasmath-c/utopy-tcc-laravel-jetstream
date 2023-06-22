<x-app-layout>
    <h2 class=" font-heading text-3xl mb-5">Minhas Compras</h2>

    <table class="w-full">
        <thead>
            <tr
                class="text-xs font-semibold tracking-wide text-left uppercase border-b border-slate-700 text-slate-400 bg-slate-900">
                <th class="px-4 py-3">Data de lançamento</th>
                <th class="px-4 py-3">Situação</th>
                <th class="px-4 py-3">Jogo</th>
                <th class="px-4 py-3">Valor</th>
            </tr>
        </thead>
        <tbody class="alldata divide-y divide-slate-700 bg-slate-800">
            @if (isset($$lista_pedidos) && isset($lista_itens))
            @foreach ($lista_pedidos as $pedido)
            <tr class="bg-slate-700 text-slate-100">
                <td class="px-4 py-3">{{ $pedido->getDataPedidoFormatada() }}</td>
                <td class="px-4 py-3">{{ $pedido->statusDescricao() }}</td>
            </tr>
                @endforeach
                @foreach ($lista_itens as $item)
                <tr>
                    <td class="px-4 py-3">{{ $item->title }}</td>
                    <td class="px-4 py-3">{{ $item->valorItem }}</td>
                </tr>
            @endforeach
        @endif
        <p class=" text-xl text-main-400">Sem items</p>
    </table>


</x-app-layout>
