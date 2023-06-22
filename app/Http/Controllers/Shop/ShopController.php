<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Developer;
use App\Models\Game;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\RequerimentsMinimum;
use App\Models\RequerimentsRecommended;
use App\Http\Controllers\GameController;
use App\Http\Controllers\User\DeveloperController;


use PagSeguro\Configuration\Configure;

class ShopController extends Controller
{
    public function index()
    {
        $game = GameController::getAllGamePaginate(10);

        return view('shop.index', compact('game'));
    }

    public function product($id)
    {
        $game = Game::findOrFail($id);
        $developer = Developer::find($game->developer_id);
        $rm = RequerimentsMinimum::find($game->id);
        $rr = RequerimentsRecommended::find($game->id);

        if($game->status == "Admission" || $game->status == "Admission Rejected"){
            $admission = true;
            return view('shop.game-page', compact(['game', 'developer', 'rm', 'rr', 'admission']));
        }
        else{
            return view('shop.game-page', compact(['game', 'developer', 'rm', 'rr']));
        }
    }

    public function historic() {
        $lista_pedidos = [];
        $user_id       = Auth::user()->id;

        $lista_pedidos = Order::
            where('user_id', $user_id)
                ->orderBy("data_pedido", "desc")
                ->get();

        return view("shop.historic", [ 'lista_pedidos' => $lista_pedidos ]);
    }

    public function details(Request $request) {
        $pedido_id = $request->input('pedido_id');

        $listaItens = OrderItem::
            join('game', 'game.id', '=', 'order_items.game_id')
                ->where('order_id', $pedido_id)
                ->get([ 'order_items.*', 'order_items.valor as valorItem' ]);

        return view(
            "shop.compras.details",
            [ 'lista_itens' => $listaItens ]
        );
    }
}
