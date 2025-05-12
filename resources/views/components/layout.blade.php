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
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1><a href="{{ route('users.index') }}">User Network</a></h1>
            @guest
                <a href="{{ route('show.login') }}" class="btn">Login</a>
                <a href="{{ route('show.register') }}" class="btn">Register</a>
            @endguest

            @auth
            <span class="border-r-2 pr-2 text-red-500">{{ Auth::user()->name }}</span>
            <a href="{{ route('users.create') }}">Create new user</a>
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button class="btn hover:cursor-pointer">Logout</button>
            </form>
            @endauth

        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>