<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Text;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->settings();
        $this->texts();
    }

    public function settings(): void
    {
        $settings = config('settings');

        foreach ($settings as $setting) {
            if(Setting::where('key', $setting['key'])->exists()) {
                continue;
            }

            Setting::create($setting);
        }
    }

    public function texts(): void
    {
        $texts = config('texts');

        foreach ($texts as $text) {
            if(Text::query()
                ->where('route', $text['route'])
                ->where('slug', $text['slug'])
                ->exists()
            ) {
                continue;
            }

            Text::create($text);
        }
    }
}
