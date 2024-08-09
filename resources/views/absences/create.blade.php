<!-- resources/views/absences/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Absence</title>
</head>
<body>
    <h1>Ajouter une Absence</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('absences.store') }}" method="POST">
        @csrf

        <div>
            <label for="user_id">ID Utilisateur:</label>
            <input type="number" name="user_id" id="user_id" value="{{ old('user_id') }}" required>
        </div>

        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}" required>
        </div>

        <div>
            <label for="heure_debut">Heure de Début:</label>
            <input type="time" name="heure_debut" id="heure_debut" value="{{ old('heure_debut') }}" required>
        </div>

        <div>
            <label for="heure_fin">Heure de Fin:</label>
            <input type="time" name="heure_fin" id="heure_fin" value="{{ old('heure_fin') }}" required>
        </div>

        <div>
            <label for="raison">Raison:</label>
            <textarea name="raison" id="raison" required>{{ old('raison') }}</textarea>
        </div>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
