@extends('layout')

@section('content')

    <h1>Modifier une personne</h1>

    <form action="{{ route('personnes.update', $personne->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" value="{{ $personne->nom }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Prénom</label>
            <input type="text" name="prenom" value="{{ $personne->prenom }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $personne->email }}" class="form-control">
        </div>

        <button class="btn btn-primary">
            Modifier
        </button>

    </form>

@endsection