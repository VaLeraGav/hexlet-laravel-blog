@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- BEGIN (write your solution here) --}}

    {{--    {{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PATCH']) }}--}}
    {{ Form::model($article, ['method' => 'PATCH', 'url' => route('articles.update', $article)]) }}
    @include('article.form')
    {{ Form::submit('Обновить') }}
    {{ Form::close() }}

    {{-- END --}}
@endsection
