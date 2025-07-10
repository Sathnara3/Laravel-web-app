<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Blog')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl">Blog App</h1>
            @auth
                <a href="{{ route(auth()->user()->role . '.dashboard') }}">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="ml-4">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="container mx-auto py-8">
        @yield('content')
    </main>
</body>
</html>