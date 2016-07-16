@extends('app')

@section('content')

    <h1>Edit: {!! $article->title  !!}</h1>

    <hr>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article]]) !!}
        @include('articles._createUpdateForm', ['submitButtonText' => 'Update!'])
    {!! Form::close() !!}

    @include('errors.list')

@stop