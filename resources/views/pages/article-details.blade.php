@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h1>Article {{ $id }}</h1>
    <p>Article portant l’identifiant {{ $id }}</p>
@endsection
