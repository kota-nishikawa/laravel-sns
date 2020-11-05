<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;


class ArticleController extends Controller
{

    //==========ここから追加==========
    public function index()
    {

           $articles = Article::all()->sortByDesc('created_at');


        return view('articles.index', ['articles' => $articles]);
    }
    //==========ここまで追加==========
   public function create()
    {
        return view('articles.create');
    }
}
