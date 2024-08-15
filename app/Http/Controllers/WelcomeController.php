<?php


namespace App\Http\Controllers;

use App\Models\NewsArticle;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $newsArticles = NewsArticle::all();

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

        return view('article', [
            'article' => $article,
        ]);
    }
}