<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// includo la il modello della tabella
use App\Comic;

class ComicController extends Controller
{
    public function comic($id) {
        $comic = Comic::where('id',$id)->first();
        
        return view('comic', compact('comic'));
    }
}
