@extends('layout')

@section('content')

    <h1 class="mb-4">Bienvenue sur la page de connexion</h1>

    <h2 class="mb-5 mt-5">Veuillez vous connecter pour accéder à votre compte.</h2>

    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

    <a href="/mot-de-passe-oublie" class="btn btn-link">Mot de passe oublié ?</a>
    <a href="/inscription" class="btn btn-link">Pas encore inscrit ?</a>

@endsection