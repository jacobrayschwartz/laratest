@extends('app')

@section('content')

    <h2>A New Article:</h2>

    <hr>

    {!! Form::open(array('url' => 'articles')) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Body :') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create!', ['class' => 'form-control btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@stop