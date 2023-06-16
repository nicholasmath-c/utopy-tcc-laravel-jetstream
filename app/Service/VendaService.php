<?php

namespace App\Service;

//use \DateTime;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;

class VendaService {
    public function finalizarVenda($produtos = [], User $user) {
        try {
            DB::beginTransaction();
            $pedido = new Order();
            $pedido->data_pedido =  now();
            $pedido->status      = "PEN";
            $pedido->user_id     = $user->id;
            $pedido->save();

            foreach($produtos as $produto) {
                $itens = new OrderItem();
                $itens->quantidade = $produto->quantity;
                $itens->valor      = $produto->price;
                $itens->data_item  = now();
                $itens->game_id    = $produto->game_id;
                $itens->order_id   = $pedido->id;
                $itens->save();
            }

            DB::commit();
            return [ 'status' => 'success', 'message' => 'Venda finalizada'];
        } catch (\Exception  $e) {
            DB::rollback();
            Log::error("ERRO: VendaService", [ 'message' => $e->getMessage() ]);
            return [ 'status' => 'success', 'message' => 'Venda não finalizada'];
        }
    }
}
