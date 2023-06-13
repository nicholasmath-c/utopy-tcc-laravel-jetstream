<?php

namespace App\Service;
use Log;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;

class VendaService {
    public function finalizarVenda($produtos = [], User $user) {
        try {
            \DB::beginTransaction();
            $data_hoje = new \DateTime();
            $data_hoje_formatada = $data_hoje->format('Y-m-d H:i:s');

            $pedido = new Order();
            $pedido->data_pedido = $data_hoje_formatada;
            $pedido->status      = "PEN";
            $pedido->user_id     = $user->id;
            $pedido->save();

            foreach($produtos as $produto) {
                $itens = new OrderItem();
                $itens->quantidade = 1;
                $itens->valor      = $produto->valor;
                $itens->data_item  = $data_hoje_formatada;
                $itens->game_id    = $produto->game_id;
                $itens->order_id   = $pedido->id;
                $itens->save();
            }

            \DB::commit();
            return [ 'status' => 'ok', 'message' => 'Venda finalizada'];
        } catch (\Exception  $e) {
            \DB::rollback();
            Log::error("ERRO: VendaService", ['message' => $e->getMessage()]);
            return [ 'status' => 'success', 'message' => 'Venda não finalizada'];
        }
    }
}
