@extends('layouts.app')

@section('title', "Article n°{$article->id}")

@section('content')
    <x-article
        :title="$article->title"
        :description="$article->description"
    />
@endsection
