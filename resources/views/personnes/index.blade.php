@extends('layouts.app')

@section('content')

    <h1 class="mb-4">Liste des personnes</h1>

    <a href="{{ route('personnes.create') }}" class="btn btn-primary mb-3">
        Ajouter une personne
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($personnes as $p)
                <tr>
                    <td>{{ $p->nom }}</td>
                    <td>{{ $p->prenom }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('personnes.edit', $p->id) }}" class="btn btn-warning btn-sm">
                            Modifier
                        </a>

                        <form action="{{ route('personnes.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection