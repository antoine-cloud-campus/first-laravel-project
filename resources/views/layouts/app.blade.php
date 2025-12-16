<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
</head>

<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">Accueil</a>
            |
            <a href="{{ route('article.details', ['id' => 1]) }}">Article 1</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>