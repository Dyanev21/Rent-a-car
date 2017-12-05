<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Photo;
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

    }

    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * @param ArticleRequest $request
     * @param Article $images
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleRequest $request, Article $images)
    {
        Article::create($request->all());

        $images->update($request->all());
        request()->validate([
            'profile_picture' => 'required|image|',
            'additional_photos' => 'required|image'
        ]);

        $input = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $input);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$input)
            ->with(redirect(route('article.index')));
    }


    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('article.index'));
    }

}