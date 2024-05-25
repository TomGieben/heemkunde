<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'author_name',
        'author_email',
        'content'
    ];

    public function newsArticle(): BelongsTo
    {
        return $this->belongsTo(NewsArticle::class);
    }
}
