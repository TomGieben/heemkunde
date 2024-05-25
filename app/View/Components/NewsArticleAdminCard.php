<?php

namespace App\View\Components;

use App\Models\NewsArticle;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsArticleAdminCard extends Component
{
    public NewsArticle $newsArticle;

    /**
     * Create a new component instance.
     */
    public function __construct(NewsArticle $article)
    {
        $this->newsArticle = $article;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-article-admin-card');
    }
}
