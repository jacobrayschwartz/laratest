@extends('app')

@section('content')

    <h1>{{$article->title}}</h1>

        <article>
            <div class="body">
                {{$article->body}}
            </div>
        </article>

    <strong>Published At: {{$article->published_at->diffForHumans()}}</strong>

@stop