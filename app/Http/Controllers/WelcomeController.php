<?php


namespace App\Http\Controllers;

use App\Helpers\Breadcrumb;
use App\Models\ContactMessage;
use App\Models\NewsArticle;
use Illuminate\Http\Request;

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
        Breadcrumb::addMany([
            'Welkom' => route('welcome'),
            'Nieuws' => route('news'),
        ]);

        $newsArticles = NewsArticle::all();

        return view('news', [
            'newsArticles' => $newsArticles,
        ]);
    }

    public function article(string $news)
    {
        $article = NewsArticle::where('slug', $news)->firstOrFail();
        $related = NewsArticle::where('slug', '!=', $news)->latest()->take(3)->get();

        Breadcrumb::addMany([
            'Welkom' => route('welcome'),
            'Nieuws' => route('news'),
            $article->title => route('article', $article->slug),
        ]);


        return view('article', [
            'article' => $article,
            'related' => $related,
        ]);
    }

    public function collection()
    {
        Breadcrumb::addMany([
            'Welkom' => route('welcome'),
            'Collectie' => route('collection'),
        ]);

        return view('collection');
    }

    public function about()
    {
        Breadcrumb::addMany([
            'Welkom' => route('welcome'),
            'Over ons' => route('about'),
        ]);
        
        return view('about');
    }

    public function contact()
    {
        Breadcrumb::addMany([
            'Welkom' => route('welcome'),
            'Contact' => route('contact'),
        ]);

        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactMessage::create($attributes);

        return redirect()->route('contact')->with('success', 'Uw bericht is verzonden.');
    }
}