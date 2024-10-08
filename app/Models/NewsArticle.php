<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class NewsArticle extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'title', 
        'slug', 
        'content', 
        'summary'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('news_article_images')
            ->singleFile();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getThumbnailUrl(): string
    {
        return $this->getFirstMediaUrl('news_article_images', 'thumb') ?? '';
    }

    public function getImageUrl(): string
    {
        return $this->getFirstMediaUrl('news_article_images') ?? '';
    }
}
