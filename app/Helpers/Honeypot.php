<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class Honeypot
{
    public static function render(): HtmlString
    {
        $honeypot = self::generate();

        return new HtmlString($honeypot);
    }

    public static function validate(Request $request): bool
    {
        $honeypotName = collect($request->all())->filter(function ($value, $key) {
            return Str::startsWith($key, 'hp_');
        })->keys()->first();

        $timestampName = collect($request->all())->filter(function ($value, $key) {
            return Str::startsWith($key, 'ts_');
        })->keys()->first();

        if (! $honeypotName || ! $timestampName) {
            return false;
        }

        $honeypotValue = $request->input($honeypotName);
        $timestampValue = $request->input($timestampName);

        if ($honeypotValue || time() - $timestampValue < 5) {
            return false;
        }

        return true;
    }

    private static function generate(): string
    {
        $honeypotName = 'hp_' . Str::random(10);
        $timestampName = 'ts_' . Str::random(10);
        $currentTime = time();

        $honeypotField = '<input type="text" name="' . $honeypotName . '" id="' . $honeypotName . '" value="" style="display:none;">';
        $timestampField = '<input type="hidden" name="' . $timestampName . '" value="' . $currentTime . '">';

        return $honeypotField . $timestampField;
    }
}