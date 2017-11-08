<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Requests\ArticleRequest;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(config('constant.per_page'));

        return view('admin.article.index', compact('articles'));
    }

    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect(route('article.index'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        return redirect(route('article.index'));
    }


    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('article.index'));
    }

}