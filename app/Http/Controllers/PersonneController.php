<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index()
    {
        $personnes = Personne::all();
        return view('personnes.index', compact('personnes'));
    }

    public function create()
    {
        return view('personnes.create');
    }

    public function store(Request $request)
    {
        Personne::create($request->all());
        return redirect()->route('personnes.index');
    }

    public function destroy($id)
    {
        Personne::destroy($id);
        return redirect()->route('personnes.index');
    }
}