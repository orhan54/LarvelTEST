@extends('layout')

@section('content')

    <h1>Ajouter une personne</h1>

    <form action="{{ route('personnes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <button class="btn btn-success">
            Enregistrer
        </button>

    </form>

@endsection