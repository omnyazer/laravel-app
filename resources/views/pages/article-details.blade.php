@extends('layouts.app')

@section('title', "Article n°$id")

@section('content')
    <x-article
        :title="$title"
        :description="$description"
    />
@endsection
