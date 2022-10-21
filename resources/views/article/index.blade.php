@extends('layouts.app')

@section('content')
    {{ Form::open(['route' => 'articles.index', 'method' => 'GET']) }}
        {{Form::text('q', $query)}}
        {{Form::submit('Search')}}
    {{Form::close()}}

    <hr>

    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', $article) }}">{{$article->name}}</a>
            <a href="{{ route('articles.edit', $article) }}">Edit</a>
            {{--<a href="{{ route('articles.destroy', $article) }}" data-method="delete"  rel="nofollow">Remove</a>--}}
            <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete"
               rel="nofollow">Удалить</a>

        </h2>
        <div>{{Str::limit($article->body, 20)}}</div>
    @endforeach
@endsection
