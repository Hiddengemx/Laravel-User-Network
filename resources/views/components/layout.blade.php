<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1><a href="/">User Network</a></h1>
            <a href="{{ route('users.index') }}">All users</a>
            <a href="{{ route('users.create') }}">Create new user</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>