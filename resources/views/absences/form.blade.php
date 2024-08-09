@extends('layouts.app')

@section('content')
    <h1>Modifier l'Absence</h1>

    <form action="{{ route('absences.update', $absence->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="user_id">Utilisateur:</label>
        <select id="user_id" name="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $user->id == $absence->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ $absence->date }}" required>

        <label for="heure_debut">Heure de Début:</label>
        <input type="time" id="heure_debut" name="heure_debut" value="{{ $absence->heure_debut }}" required>

        <label for="heure_fin">Heure de Fin:</label>
        <input type="time" id="heure_fin" name="heure_fin" value="{{ $absence->heure_fin }}" required>

        <label for="raison">Raison:</label>
        <textarea id="raison" name="raison">{{ $absence->raison }}</textarea>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
