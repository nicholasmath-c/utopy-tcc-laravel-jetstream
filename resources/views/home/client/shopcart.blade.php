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
                                    <td class="image">Image</td>
                                    <td class="description">Product</td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Total</td>
                                    <td class="delete">Delete</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        Imagem do produto
                                    </td>

                                    <td>
                                        Link do Produto
                                    </td>

                                    <td>
                                        R$ 900
                                    </td>

                                    <td>
                                        <form
                                            // TODO: AQUI TEM QUE TER A ROUTE PARA CRIAR ESSE ITEM NO SHOPCART
                                            action=""
                                            method="POST"
                                        >
                                            @csrf

                                            <x-input
                                                class="input"
                                                name="quantity"
                                                type="number"
                                                {{-- value="{{$rs->quantity}}" min="1" --}}
                                                {{-- max="{{$rs->product->quantity}}" --}}
                                                onchange="this.form.submit()"
                                            />
                                        </form>
                                    </td>

                                    <td>
                                        Precinho total
                                    </td>

                                    <td>
                                        <a
                                            // TODO: AQUI TEM QUE TER UM LINK PARA DESTRUIR ESSE ITEM DO SHOPCART
                                           href=""
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Certeza que vai deletar? 😢')"
                                        >
                                           Delete
                                        </a>
                                    </td>
                                </tr>
                                12
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-10 pull-right">
                    <div class="total_area">
                        <ul>
                            {{-- <li>Cart Sub Total <span>${{$total}}</span></li> --}}
                            <li>Eco Tax <span>$2</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            {{-- <li>Total <span>${{$total}}</span></li> --}}
                        </ul>

                        {{-- // TODO: CRIAR UMA ROTA PARA ORDER {{route('user.order.create')}} --}}
                        <form action="" method="post">
                            @csrf
                            <div class="pull-right">
                                <input type="hidden" name="total" value="TOTAL">
                                <button type="submit" class="btn btn-default check_out">Check Out</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/#user-page-->
</section>


@endsection
