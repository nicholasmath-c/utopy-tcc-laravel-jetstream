<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;

class AdminDeveloperController extends Controller
{
    public function index(){
        $developer = Developer::paginate(5);

        return view("admin.developer.index", compact('developer'));
    }
}
