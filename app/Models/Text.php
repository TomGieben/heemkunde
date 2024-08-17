<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Text extends Model
{
    use HasFactory;

    protected $fillable = [
        'route', 
        'slug', 
        'title', 
        'body'
    ];

    public static function render(string $slug): string
    {
        $route = request()->route()->getName();
        $cacheKey = "text_{$route}_{$slug}";
    
        $text = Cache::remember($cacheKey, 60, function () use ($route, $slug) {
            return self::query()
                ->where('route', $route)
                ->where('slug', $slug)
                ->first();
        });
    
        if (!$text) {
            return '';
        }
    
        return $text->body;
    }
}
