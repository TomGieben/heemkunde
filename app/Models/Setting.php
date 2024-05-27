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
        'description',
        'type',
        'key', 
        'value',
        'is_editable',
    ];

    protected $casts = [
        'type' => SettingType::class,
        'is_editable' => 'boolean',
    ];

    public function scopeWhereIsEditable($query)
    {
        return $query->where('is_editable', true);
    }

    public static function getByKey(string $key): ?string
    {
        $value = self::where('key', $key)->first()?->value;


        return !empty($value) ? $value : null;
    }
}
