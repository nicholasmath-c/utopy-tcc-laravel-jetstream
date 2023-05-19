@extends('layouts.master')

@section('main')
    <section id="cart_items">
        <div id="user-page" class="container">
            <div class="bg">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title text-center">User Panel</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="contact-form">
                            Menu do Usuario
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <h2 class="title text-center">User Shopcart</h2>
                        @include('home.messages')

                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Imagem</td>
                                        <td class="description">Produto</td>
                                        <td class="price">Preço</td>
                                        <td class="quantity">Quantidade</td>
                                        <td class="total">Total</td>
                                        <td class="delete">Deletar</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp

                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                @if ($item->product->image)
                                                    <div style="text-align:center">
                                                        <img
                                                            src="{{ Storage::url($item->product->image) }}"
                                                            width="100"
                                                            height="100" alt="{{ $item->product->description }}" />
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{-- TODO: CRIAR A ROTA DE MOSTRAR O PRODUTO --}}">
                                                    {{ $item->product->title }}
                                                </a>
                                            </td>
                                            <td>R$ {{ $item->product->price }}</td>
                                            <td>
                                                <form
                                                    action="{{ route('user.shopcart.update', $item->id, $item->quantity) }}"
                                                    method="POST"
                                                >
                                                    @csrf

                                                    <x-input
                                                        class="input"
                                                        name="quantity"
                                                        type="number"
                                                        value="{{ $item->quantity }}"
                                                        min="1"
                                                        max="{{ $item->product->quantity }}"
                                                        onchange="this.form.submit()"
                                                    />
                                                </form>
                                            </td>

                                            <td>R$ {{ $item->product->price * $item->quantity }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('user.shopcart.destroy', ['id' => $item->id]) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Deleting! Are you sure?')"
                                                >
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @php
                                            $total += $item->product->price * $item->quantity;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm-10 pull-right">
                        <div class="total_area">
                            <ul>
                                <li>
                                    Sub Total <span>${{ $total }}</span>
                                </li>
                                <li>
                                    Taxa <span>$2</span>
                                </li>
                                <li>
                                    Total <span>${{ $total }}</span>
                                </li>
                            </ul>

                            {{-- // TODO: CRIAR UMA ROTA PARA ORDER {{route('user.order.create')}} --}}
                            <form action="" method="post">
                                @csrf
                                <div class="pull-right">
                                    <x-input type="hidden" name="total" value="TOTAL" />

                                    <button type="submit" class="btn btn-default check_out">
                                        Check Out
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
