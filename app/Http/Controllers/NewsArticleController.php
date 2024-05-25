<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsArticleController extends Controller
{
    public function index()
    {
        $newsArticles = NewsArticle::query()
            ->with('author')
            ->get();

        return view('admin.news-articles.index', [
            'newsArticles' => $newsArticles,
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('admin.news-articles.create', [
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'summary' => 'nullable',
            'content' => 'required',
            'image' => 'required|image',
            'user_id' => 'nullable',
        ]);

        $image = $request->file('image');
        $attributes['slug'] = Str::slug($attributes['title']);

        if(NewsArticle::where('slug', $attributes['slug'])->exists()) {
            $attributes['slug'] = $attributes['slug'] . '-' . uniqid();
        }

        if(!$request->has('user_id') || empty($request->user_id)) {
            $attributes['user_id'] = auth()->user()->id;
        }

        $newsArticle = NewsArticle::create($attributes);

        $newsArticle->addMedia($image)->toMediaCollection('news_article_images');

        return redirect()->route('admin.news-articles.index');
    }

    public function edit(NewsArticle $newsArticle)
    {
        $users = User::all();

        return view('admin.news-articles.edit', [
            'newsArticle' => $newsArticle,
            'users' => $users,
        ]);
    }

    public function update(Request $request, NewsArticle $newsArticle)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'summary' => 'nullable',
            'content' => 'required',
            'image' => 'nullable|image',
            'user_id' => 'nullable',
        ]);

        $image = $request->file('image');
        $attributes['slug'] = Str::slug($attributes['title']);

        if(NewsArticle::where('slug', $attributes['slug'])->where('id', '!=', $newsArticle->id)->exists()) {
            $attributes['slug'] = $attributes['slug'] . '-' . uniqid();
        }

        if(!$request->has('user_id') || empty($request->user_id)) {
            $attributes['user_id'] = auth()->user()->id;
        }

        $newsArticle->update($attributes);

        if($image) {
            $newsArticle->clearMediaCollection('news_article_images');
            $newsArticle->addMedia($image)->toMediaCollection('news_article_images');
        }

        return redirect()->route('admin.news-articles.index');
    }
    
    public function destroy(NewsArticle $newsArticle)
    {
        $newsArticle->delete();

        return redirect()->route('admin.news-articles.index');
    }
}
