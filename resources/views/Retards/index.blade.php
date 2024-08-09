<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retards</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Retards</h1>
        <nav>
            <a href="{{ route('app_home') }}">Home</a>
            <a href="{{ route('retards.create') }}">Add Retard</a>
            <a href="{{ route('absences.index') }}">Absences</a>
        </nav>
    </header>

    <main>
        <h2>List of Retards</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Hours</th>
                    <th>Reason</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($retards as $retard)
                    <tr>
                        <td>{{ $retard->id }}</td>
                        <td>{{ $retard->nom }}</td>
                        <td>{{ $retard->date }}</td>
                        <td>{{ $retard->hours }}</td>
                        <td>{{ $retard->reason }}</td>
                        <td>
                            <a href="{{ route('retards.edit', $retard->id) }}">Edit</a>
                            <form action="{{ route('retards.destroy', $retard->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
