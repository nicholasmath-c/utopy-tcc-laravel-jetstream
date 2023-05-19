<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequerimentsRecommended extends Model
{
    protected $table = 'requeriments_minimum';
    protected $fillable = ['game_id', 'os', 'cpu', 'ram', 'gpu', 'storage'];

    public function relGame(){
        return $this->hasOne('App\Models\Game', 'id', 'game_id');
    }
}
