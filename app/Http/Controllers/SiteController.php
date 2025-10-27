<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller  
{
    // Página inicial do site
    public function home()
    {
        return view('home');
    }

    // Página "Sobre Nós"
    public function sobre()
    {
        return view('sobre');
    }
}
