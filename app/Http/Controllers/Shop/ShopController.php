<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Game;
use App\Models\Ordem;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::all();

        return view('home.home', compact('game'));
    }
    /**
     * Display the specified resource.
     */
    public function product($id)
    {
        $game = Game::findOrFail($id);

        return view('shop.game-page', compact('game'));
    }

    public function historic() {
        $data          = [];
        $lista_pedidos = [];
        $user_id       = \Auth::user()->id;

        $lista_pedidos = Order::
            where('user_id', $user_id)
                ->orderBy("data_pedido", "desc")
                -get();

        return view("shop.historic", [ 'lista_pedidos' => $lista_pedidos ]);
    }
}
