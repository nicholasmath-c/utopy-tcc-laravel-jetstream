<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::user();

        if($user->user_type != 2){
            return view('admin.nopermission');
        }
        else{
            return view('admin.index');
        }
    }
}
