<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Gestion des Absences</h1>
        <nav>
            <ul>
                <li><a href="{{ route('app_home') }}">Accueil</a></li>
                <li><a href="{{ route('absences.index') }}">Absences</a></li>
                <!-- Ajoutez d'autres liens ici -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Votre Application</p>
    </footer>
</body>
</html>
