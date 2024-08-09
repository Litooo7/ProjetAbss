<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $retard ? 'Edit Retard' : 'Add Retard' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>{{ $retard ? 'Edit Retard' : 'Add Retard' }}</h1>
        <nav>
            <a href="{{ route('app_home') }}">Home</a>
            <a href="{{ route('retards.index') }}">Back to List</a>
        </nav>
    </header>

    <main>
        <form action="{{ $retard ? route('retards.update', $retard->id) : route('retards.store') }}" method="POST">
            @csrf
            @if ($retard)
                @method('PUT')
            @endif
            <label for="nom">Name:</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $retard->nom ?? '') }}" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="{{ old('date', $retard->date ?? '') }}" required>

            <label for="hours">Hours:</label>
            <input type="number" id="hours" name="hours" value="{{ old('hours', $retard->hours ?? '') }}" required>

            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason">{{ old('reason', $retard->reason ?? '') }}</textarea>

            <button type="submit">{{ $retard ? 'Update Retard' : 'Add Retard' }}</button>
        </form>
    </main>
</body>
</html>
