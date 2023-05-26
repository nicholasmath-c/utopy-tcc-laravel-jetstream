<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopcart;
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
        $data = Shopcart::where('user_id', Auth::id())->get();

        return view('client.shopcart',[
            'data' => $data
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
        $id = $request->id;
        // checkar o produto por usuario
        $data = Shopcart::where('game_id', $id)->where('user_id',  Auth::id())->first();

        if ($data)
        {
            $data->quantity = $data->quantity + $request->input('quantity');
        } else
        {
            $data = Shopcart::create([
                'game_id' => $id,
                'user_id' => Auth::id(),
                'quantity' => $request->input('quantity')
            ]);

            if($categoria) {
                return redirect()
                    ->route('home.client.shopcart')
                    ->with('success', 'Produto adicionado com sucesso!');
            }
        }

        return redirect()
            ->back()
            ->with('success', 'Product Added to Shopcart');
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
    public function update(Request $request, Shopcart $shopcart, $id)
    {
        Shopcart::where([ 'id' => $id ])->update([
            'quantity' => $request->input('quantity')
        ]);

        return redirect()
            ->route('home.client.shopcart')
            ->with('success', 'Carrinho atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GenreGame::destroy($id);

        return redirect()
            ->route('genre-game.index')
            ->with('success', 'Produto retirado do carrinho! 😥');
    }
}
