@extends('layouts.app')

@section('title', "Article n°$id")

@section('content')
    <h2>Article n°{{ $id }}</h2>
    <p>Vous consultez l’article portant l’identifiant {{ $id }}</p>
@endsection
