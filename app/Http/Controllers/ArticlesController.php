<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use PhpParser\Error;

class ArticlesController extends Controller
{
    //
    public function Articles()
    {
        $articles = Article::paginate(5);

        return view('articles.articles', compact('articles'));
    }

    public function Article($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.article', compact('article'));
    }

    public function create()
    {
        if($_POST){
            dd('Есть');
        }
        return view('articles.create');
    }
}
