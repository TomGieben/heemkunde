<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\NewsArticle;
use Livewire\Component;

class Comments extends Component
{
    public NewsArticle $newsArticle;
    public string $authorName = '';
    public string $authorEmail = '';
    public string $content = '';

    public function mount(NewsArticle $newsArticle)
    {
        $this->newsArticle = $newsArticle;
    }

    public function destroy($commentId)
    {
        $comment = Comment::findOrFail($commentId);

        $comment->delete();
    }

    public function store()
    {
        $this->validate([
            'authorName' => 'required|string',
            'authorEmail' => 'required|email',
            'content' => 'required|string',
        ]);

        $this->newsArticle->comments()->create([
            'author_name' => $this->authorName,
            'author_email' => $this->authorEmail,
            'content' => $this->content,
        ]);

        $this->authorName = '';
        $this->authorEmail = '';
        $this->content = '';
    }

    public function render()
    {
        $comments = $this->newsArticle->comments()->latest()->get();

        return view('livewire.comments', [
            'comments' => $comments,
        ]);
    }
}
