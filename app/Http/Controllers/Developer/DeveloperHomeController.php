<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperHomeController extends Controller
{
    public function index() {
        return view('developer.index');
    }
}
