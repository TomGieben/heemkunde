<?php


namespace App\Http\Controllers;

use App\Models\NewsArticle;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $newsArticles = NewsArticle::latest()->take(3)->get();

        return view('welcome', [
            'newsArticles' => $newsArticles,
        ]);
    }

    public function news()
    {
        $newsArticles = NewsArticle::all();

        return view('news', [
            'newsArticles' => $newsArticles,
        ]);
    }

    public function article(string $news)
    {
        $article = NewsArticle::where('slug', $news)->firstOrFail();
        $related = NewsArticle::where('slug', '!=', $news)->latest()->take(3)->get();

        return view('article', [
            'article' => $article,
            'related' => $related,
        ]);
    }

    public function collection()
    {
        return view('collection');
    }

    public function about()
    {
        return view('about');
    }
}