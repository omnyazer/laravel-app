@extends('layouts.app')

@section('title', 'Bienvenue')

@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>

    @forelse ($articles as $article)
        @if ($loop->last)
            @break
        @endif

        <x-article
            :title="$article['title']"
            :description="$article['description']"
        />
    @empty
        <p>Aucun article disponible
            
        </p>
    @endforelse
@endsection
