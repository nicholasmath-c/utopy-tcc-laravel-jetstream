<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    public static function getDeveloper(){
        $developer = User::whereHas('developer', function ($query) {
            $query->where('admission', 'Approved')->where('user_id', Auth::user()->id);
        })->first();

        return $developer;
    }
}
