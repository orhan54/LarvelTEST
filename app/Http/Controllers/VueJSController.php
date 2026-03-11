<?php

namespace App\Http\Controllers;

use App\Models\Personne;

class VueJSController extends Controller
{
    public function index()
    {
        // récupère toutes les personnes depuis la route resource
        $personnes = Personne::all();
        return view('vuejs.index', compact('personnes'));
    }
}