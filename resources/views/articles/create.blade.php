@extends('app')

@section('content')

    <h2>A New Article:</h2>

    <hr>

    {!! Form::open(array('url' => 'articles')) !!}
        @include('articles._createUpdateForm', ['submitButtonText' => 'Create!'])
    {!! Form::close() !!}


    @include('errors.list')

@stop