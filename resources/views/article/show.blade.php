@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div class="text-break">{{$article->body}}</div>
@endsection
