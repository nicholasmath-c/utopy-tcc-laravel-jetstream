<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a Home Page from Client
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.home');
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
