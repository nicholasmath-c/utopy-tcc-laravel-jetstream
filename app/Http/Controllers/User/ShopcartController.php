<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Service\VendaService;

use App\Models\Game;
use App\Models\Shopcart;


class ShopcartController extends Controller
{
    /**
    * Conta os produtos no carrinho 
    */
    public function countShopcart() {
        return Shopcart::where('user_id', Auth::id())->count();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Shopcart::obterTodosProdutos();

        return view('client.shopcart',[
            'shopcart' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Shopcart::
            where('id', $request->id)
                ->where('user_id', Auth::id())
                ->first();

        if ($data) {
            $data->quantity += $request->input('quantity');
        } else {
            $data = new Shopcart();

            $data->game_id  = $request->input('game_id');
            $data->user_id  = Auth::id();
            $data->quantity = $request->input('quantity');
        }

        $data->save();
        return redirect()
            ->back()
            ->with('success','Produto adicionado ao Carrinho');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Shopcart $shopcart,$id)
    {
        Shopcart::where([ 'id' => $id ])->update([
            'quantity' => $request->input('quantity')
        ]);

        return redirect()
            ->route('shopcart.index')
            ->with('success', 'Carrinho atualizado com sucesso!');
    }

    public function pay(Request $request) {
        $produtos = Shopcart::join('games', 'games.id', '=', 'shopcarts.game_id')
            ->join('genre_games', 'genre_games.id', '=', 'games.genre_game_id')
            ->where('user_id', $user_id) 
            ->select(
                    'shopcarts.id as shopcart_id',
                    'genre_games.name as genre_game',
                    'shopcarts.*',
                    'games.*',
                    'genre_games.*'
                )
                ->get();

        # Dados Autenticação 
        $Data["email"] = env('PAGSEGURO_EMAIL');
        $Data["token"] = env('PAGSEGURO_TOKEN');
        $Data["currency"]="BRL";

        # Items
        $Data["itemId1"]="1";
        $Data["itemDescription1"]="Jogos Eletrônicos";
        $total = 0; 
        foreach($pedidos as $item) {
         $total += $item['price'];    
         $Data["itemAmount1"] = "". $total ."";           
        }
        $Data["itemQuantity1"]="1 por unidade";
        $Data["itemWeight1"]="N/A";

        # Referência 
        $Data["reference"]="83783783737";

        # Dados do Recebedor
        $Data["senderName"]="João da Silva";
        $Data["senderAreaCode"]="37";
        $Data["senderPhone"]="99999999";
        $Data["senderEmail"]="c51994292615446022931@sandbox.pagseguro.com.br";
        $Data["shippingType"]="1";
        $Data["shippingAddressStreet"]="Rua Antonieta";
        $Data["shippingAddressNumber"]="10";
        $Data["shippingAddressComplement"]="Casa";
        $Data["shippingAddressDistrict"]="Jardim Paulistano";
        $Data["shippingAddressPostalCode"]="30690090";
        $Data["shippingAddressCity"]="Belo Horizonte";
        $Data["shippingAddressState"]="MG";
        $Data["shippingAddressCountry"]="BRA";

        $BuildQuery=http_build_query($Data);
        $Url="https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";

        $Curl=curl_init($Url);
        curl_setopt($Curl,CURLOPT_HTTPHEADER, Array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
        curl_setopt($Curl,CURLOPT_POST,true);
        curl_setopt($Curl,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($Curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($Curl,CURLOPT_POSTFIELDS,$BuildQuery);
        $Retorno=curl_exec($Curl);
        curl_close($Curl);

        $Xml = $Retorno;
        $code = simplexml_load_string($Xml);

        return view('shop.checkout', [ 'code' =>  $code, 'data' => $Data, 'produtos' => $produtos ]);
    }

    public function checkout(Request $request) {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Shopcart::destroy($id);

        return redirect()
            ->route('shopcart.index')
            ->with('success', 'Produto retirado do carrinho! 😥');
    }
}
