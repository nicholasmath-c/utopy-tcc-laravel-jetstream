<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_pedido',
        'user_id',
        'status'
    ];

    public function getDataPedidoFormatada() {
        return date_create($this->data_pedido)->format('d/m/Y H:i');
    }

    public function statusDescricao() {
        $descricao = "";

        switch ($this->status) {
            case 'PEN':
                $descricao = "PENDENDE";
                break;

            case 'APR':
                $descricao = "APROVADA";
                break;

            default:
                $descricao = "CANCELADA";
                break;
        }

        return $descricao;
    }
}
