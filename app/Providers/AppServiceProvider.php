<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Blade::directive('content', function (string $expression): string {
            return "<?php echo App\Models\Text::render($expression); ?>";
        });

        Blade::directive('honeypot', function () {
            return "<?php echo App\Helpers\Honeypot::render(); ?>";
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->setSetting();
    }

    /**
     * Set the setting, in case the table exists.
     */
    private function setSetting(): void
    {
        if (!Schema::hasTable('settings')) {
            return;
        }

        $appName = Setting::getByKey('app_name') ?? env('APP_NAME', 'Laravel');

        config(['app.name' => $appName]);
    }
}
