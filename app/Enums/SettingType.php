<?php

namespace App\Enums;

enum SettingType: string
{
    case color = 'color';
    case text = 'text';
    case checkbox = 'checkbox';
    case number = 'number';

    public static function toArray(): array
    {
        return [
            self::color,
            self::text,
            self::checkbox,
            self::number,
        ];
    }
}
