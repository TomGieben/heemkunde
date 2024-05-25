<?php

namespace App\Models;

use App\Enums\SettingType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'key', 
        'value',
        'is_editable',
    ];

    protected $casts = [
        'type' => SettingType::class,
        'is_editable' => 'boolean',
    ];

    public static function getByKey(string $key): ?string
    {
        return self::where('key', $key)->first()?->value;
    }
}
