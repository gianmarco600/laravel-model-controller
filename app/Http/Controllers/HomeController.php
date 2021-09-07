<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index() {

        $comics = Comic::all();
    
        return view('home', compact("comics"));
    }

    public function characters() {
        return view('characters');
    }

    public function comics() {
        return view('comics');
    }

    public function movies() {
        return view('movies');
    }

    public function tv() {
        return view('tv');
    }

    public function games() {
        return view('games');
    }

    public function videos() {
        return view('videos');
    }

    public function news() {
        return view('news');
    }

    public function shop() {
        return view('shop');
    }
}

