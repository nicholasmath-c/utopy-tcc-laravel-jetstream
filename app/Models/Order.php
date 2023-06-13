<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    use HasFactory;

    protected $dates = [ "data_pedido" ];
    protected $fillable = [
        'data_pedido',
        'user_id',
        'status'
    ];

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
