@extends('layouts.app')

@section('content')
    {{--    {{ Form::open(['route' => 'articles.index', 'method' => 'GET']) }}--}}
    {{--        {{Form::text('q', $query)}}--}}
    {{--        {{Form::submit('Search')}}--}}
    {{--    {{Form::close()}}--}}
    {{ Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'd-flex'])}}
    {{Form::text('q', $query, ['class' => 'form-control me-2'])}}
    {{Form::button('Search', ['type'=>'submit', 'class' => 'btn btn-outline-success'])}}
    {{Form::close()}}

    <hr>

    @foreach ($articles as $article)
        <div class="col border m-4 p-2">
            <h3>
                <a class="nav-link link-secondary " href="{{ route('articles.show', $article) }}">{{$article->name}}</a>
            </h3>
            <div><?= Str::limit($article->updated_at, 16, '') ?></div>
            <div><?= Str::limit($article->body, 150) ?></div>

            <a href="{{ route('articles.show', $article) }}">ReadMore</a>
            <a href="{{ route('articles.edit', $article) }}">edit</a>
            {{--<a href="{{ route('articles.destroy', $article) }}" data-method="delete"  rel="nofollow">Remove</a>--}}
            <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete"
               rel="nofollow">remove</a>
        </div>
    @endforeach
@endsection
