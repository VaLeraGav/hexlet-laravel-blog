@extends('layouts.app')

@section('header', 'Статьи')

@section('content')
    <p>Тут будут статьи</p>
    @foreach ($articles as $article)
        <h2>{{ $article->name }}</h2>
        <div>{{ $article->body }}</div>
    @endforeach
@endsection
