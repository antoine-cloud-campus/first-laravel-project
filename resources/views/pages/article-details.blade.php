@extends('layouts.app')

@section('title', 'Article ' . $article->id)

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>
    <a href="{{ route('home') }}">← Retour à l’accueil</a>
@endsection
