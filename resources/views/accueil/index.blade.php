@extends('layout')

@section('content')

    <h1 class="mb-4">Bienvenue sur la page d'acceuil</h1>

    <h2 class="mb-5 mt-5">Ce projet est un exemple de CRUD (Create, Read, Update, Delete) pour la gestion des personnes.
    </h2>

    <p>Cette application permet de gérer les informations des personnes de manière simple et efficace.</p>

    <img src="{{ asset('images/crud.png') }}" alt="Photo" class="img-fluid">

@endsection