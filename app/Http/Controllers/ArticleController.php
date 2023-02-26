<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show()
    {
        $articles = Article::all();

        return view('article', ['article' => $articles]);
    }
}

