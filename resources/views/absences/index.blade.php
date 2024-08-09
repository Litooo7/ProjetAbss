@extends('layouts.app')

@section('content')
    <h1>Liste des Absences</h1>
    <a href="{{ route('absences.create') }}">Ajouter une absence</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Date</th>
                <th>Heure de Début</th>
                <th>Heure de Fin</th>
                <th>Raison</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absences as $absence)
                <tr>
                    <td>{{ $absence->id }}</td>
                    <td>{{ $absence->user->name }}</td>
                    <td>{{ $absence->date }}</td>
                    <td>{{ $absence->heure_debut }}</td>
                    <td>{{ $absence->heure_fin }}</td>
                    <td>{{ $absence->raison }}</td>
                    <td>
                        <a href="{{ route('absences.edit', $absence->id) }}">Modifier</a>
                        <form action="{{ route('absences.destroy', $absence->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
