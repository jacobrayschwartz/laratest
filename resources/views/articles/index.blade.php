@extends('app')

@section('content')

    <h1>Articles</h1>

    @foreach($articles as $article)
         <article>
              <h2>
                  <a href="{{action('ArticlesController@show', ['id' => $article->id])}}">{{$article->title}}</a> - <em>{{$article->user->name}}</em>
              </h2>
             <div class="body">
                 {{$article->body}}
             </div>
         </article>
    @endforeach

 @stop