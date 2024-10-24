<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Page d\'accueil';
        return view('index', compact('title'));
    }

    public function about()
    {
        $title = 'À propos';
        return view('about', compact('title'));
    }

    public function services()
    {
        $title = 'Nos Services';
        $services = ['Création compte', 'Versement', 'Retrait', 'Transfert d\'argent'];
        return view('services', compact('title', 'services'));
    }
}
