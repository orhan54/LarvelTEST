@extends('layout')

@section('content')

    <h1>Voici la liste des personnes</h1>
    <p>Ceci est une application de gestion de personnes.</p>

    <script>
        window.__PERSONNES__ = @json($personnes);
    </script>

    <div id="app">
        <ul>
            <li v-for="personne in personnes" :key="personne.id">
                @{{ personne.nom }} @{{ personne.prenom }} — @{{ personne.email }}
            </li>
        </ul>
    </div>

@endsection