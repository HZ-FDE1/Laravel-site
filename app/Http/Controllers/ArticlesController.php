<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index() {
        // Renders a list of a resources
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        // Shows a view to create a new resource
        return view('articles.create');
    }

    public function store(Request $request) {

        $validatedAttributes = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        Article::create($validatedAttributes);

        return redirect(route('articles.index'));
    }

    public function edit(Article $article) {

        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article, Request $request) {

        $validatedAttributes = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->update($validatedAttributes);

        return redirect(route('articles.show', $article));
    }

    public function destroy(Article $article) {
        $article->delete();

        return redirect(route('articles.index'));
    }
}
