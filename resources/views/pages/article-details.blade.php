@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <x-article
        :title="$article->title"
        :description="$article->description"
        :truncate="false"
    />

    <a href="{{ route('home') }}">← Retour à l’accueil</a>
@endsection
