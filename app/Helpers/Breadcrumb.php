<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;


class Breadcrumb
{
    public static function all(): array
    {
        $currentRoute = Route::currentRouteName();

        return session()->get('breadcrumbs', [])[$currentRoute] ?? [];
    }

    public static function addMany(array $breadcrumbs)
    {
        self::clear();

        foreach ($breadcrumbs as $name => $url) {
            self::add($name, $url);
        }
    }

    public static function add(string $name, string $url = null)
    {
        $currentRoute = Route::currentRouteName();
        $breadcrumb = [
            'name' => $name,
            'url' => $url,
        ];

        self::store($currentRoute, $breadcrumb);
    }

    private static function store(string $currentRoute, array $breadcrumb)
    {
        $breadcrumbs = session()->get('breadcrumbs', []);
        $breadcrumbs[$currentRoute][] = $breadcrumb;
        session()->put('breadcrumbs', $breadcrumbs);
    }

    public static function clear()
    {
        $currentRoute = Route::currentRouteName();
        $breadcrumbs = session()->get('breadcrumbs', []);
        $breadcrumbs[$currentRoute] = [];
        session()->put('breadcrumbs', $breadcrumbs);
    }
}