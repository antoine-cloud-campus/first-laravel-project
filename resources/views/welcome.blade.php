<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <h1>Bienvenue sur le site de {{ $name }}</h1>
    <a href="{{ route('home') }}">Accueil</a>
    <a href="{{ route('article.details', ['id' => 5]) }}">Article 5</a>

</body>


</html>