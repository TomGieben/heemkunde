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
}