<?php

namespace App\Http\Controllers\User;
// TODO: FAZER COM QUE APENAS UM JOGO ENTRE PARA O CARRINHO
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Shopcart;
use App\Service\VendaService;
use App\Models\Game;
use Illuminate\Support\Facades\Auth;

class ShopcartController extends Controller
{
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
        # Cofigs Autenticação
        $data["email"] = env('PAGSEGURO_EMAIL');
        $data["token"] = env('PAGSEGURO_TOKEN');
        $data["currency"]="BRL";

        # Itens do Pedido
        $data["items"] = [
            [
                'itemId' => '1',
                'itemDescription' => 'Website desenvolvido pela WEF.',
                'itemAmount' => '1000000.00',
                'itemQuantity' => '1',
                'itemWeight' => '1000'
            ],

            'itemId' => '1',
            'itemDescription' => 'Website desenvolvido pela WEF.',
            'itemAmount' => '1000000.00',
            'itemQuantity' => '1',
            'itemWeight' => '1000',
        ];
        $data["reference"]="83783783737";

        # Dados do Recebedor
        $data["senderName"]="João da Silva";
        $data["senderAreaCode"]="37";
        $data["senderPhone"]="99999999";
        $data["senderEmail"]="c51994292615446022931@sandbox.pagseguro.com.br";

        #
        $data["shippingType"]="1";
        $data["shippingAddressStreet"]="Rua Antonieta";
        $data["shippingAddressNumber"]="10";
        $data["shippingAddressComplement"]="Casa";
        $data["shippingAddressDistrict"]="Jardim Paulistano";
        $data["shippingAddressPostalCode"]="30690090";
        $data["shippingAddressCity"]="Belo Horizonte";
        $data["shippingAddressState"]="MG";
        $data["shippingAddressCountry"]="BRA";

        $BuildQuery=http_build_query($data);
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

        return view('shop.checkout', [ 'code' =>  $code, 'data' => $data ]);
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
