@extends('layouts.app')

@section('content')
    <h1><?= $article->name ?></h1>
    <hr>
    <div class="text-break"><?= $article->body ?></div>
    {{--    <div class="text-break"><?= htmlspecialchars($article->body) ?></div>--}}
@endsection
