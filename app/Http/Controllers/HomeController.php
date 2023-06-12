<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Developer;
use App\Http\Controllers\User\DeveloperController;

class HomeController extends Controller
{
    /**
     * Display a Home Page from Client
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();

        return view('home.home', compact('game'));
    }

    /**
     * Show the About Page
     *
     * @return \Illuminate\Http\Response
     */
    public function showAbout() {
        return view('client.about');
    }

    public function showContact() {
        return view('client.contact');
    }

    public function showTerms() {
        return view('client.terms');
    }

    public function showPolicy() {
        return view('client.policy');
    }

    public function showeExplorer() {
        return view('client.explorer');
    }
}
