<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Game;
use App\Models\Order;
use App\Models\OrderItem;

use PagSeguro\Configuration\Configure;

class ShopController extends Controller
{
    private $_configs;
     
    public function _construct() {
        # --- Configurações do PagSeguro
        $this->_configs = new Configure();
        
        $this->_configs->setCharset('UTF-8');
        $this->_configs->setAccountCredentials(
            env('PAGSEGURO_EMAIL'),
            env('PAGSEGURO_TOKEN')
        );
        $this->_configs->setEnvironment(env('PAGSEGURO_ENV'));
        $path_log = 'logs/pagseguro_' . date('Ymd') . '.log';
        $this->_configs->setLog(true, storage_path($path_log));
    }

    public function getCredential() {
        return $this->_configs->getAccountCredentials();
    }

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

    public function processCheckout(Request $request) { 
        $data = [];

        $carrinho = Shopcart::
            join('games', 'games.id', '=', 'shopcarts.game_id')
                ->select('shopcarts.*', 'games.*')
                ->get();
        $data['shopcart'] = $carrinho;                

        $sessionCode = \Pagseguro\Services\Servico::create(
            $this->getCredential()
        );
        $IDSession = $sessionCode->getResult();
        $data['sessionID'] = $IDSession;

        return view('shop.checkout', $data);
    }
}
