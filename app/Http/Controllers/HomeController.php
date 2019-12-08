<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $datartikel = Articles::all();
        return view('selamat')->with('articles', $datartikel);
    }
}
