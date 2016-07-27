<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index(){
        $articles = Article::orderBy('published_at', 'desc')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article){
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request ){
        //var_dump(Request::all());
        //die();

        //Old article
        //Article::create(Request::all());

        //Automagically assigns userid in the article
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);

        return redirect('articles');
     }

    public function edit(Article $article){
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request ){

        $article->update($request->all);

        return redirect('articles');
    }
}
