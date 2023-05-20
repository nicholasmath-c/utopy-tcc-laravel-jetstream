<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    protected $table = 'shopcarts';
    protected $fillable = ['user_id', 'game_id', 'quantity'];
}