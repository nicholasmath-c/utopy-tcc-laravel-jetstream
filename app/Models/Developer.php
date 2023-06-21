<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $table = 'developers';
    protected $fillable = [];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function game(){
        return $this->hasMany(Game::class, 'id');
    }
}
