@extends('layouts.app')

@section('content')
    {{ Form::open(['route' => 'articles.index', 'method' => 'GET']) }}
        {{Form::text('q', $query)}}
        {{Form::submit('Search')}}
    {{Form::close()}}

    <hr>

    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 20)}}</div>
    @endforeach
@endsection
