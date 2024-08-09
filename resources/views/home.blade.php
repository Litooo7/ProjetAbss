<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to the Home Page</h1>
        <nav>
            <ul>
                <li><a href="{{ route('absences.index') }}">Absences</a></li>
                <li><a href="{{ route('retards.index') }}">Retards</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <p>This is the main content area of the home page.</p>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Application</p>
    </footer>
</body>
</html>
