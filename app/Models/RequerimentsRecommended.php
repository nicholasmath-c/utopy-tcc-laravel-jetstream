<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequerimentsRecommended extends Model
{
    protected $table = 'requeriments_recommended';
    protected $fillable = ['game_id', 'os', 'cpu', 'ram', 'gpu', 'storage'];

    public function game()
    {
        return $this->belongsTo(Game::class, 'id', 'game_id');
    }
}
