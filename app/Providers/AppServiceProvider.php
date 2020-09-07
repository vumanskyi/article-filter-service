<?php

namespace App\Providers;

use App\Services\View\TextLimit;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //@text_limit(text)
        Blade::directive('text_limit', function ($params = '') {
            return "<?php echo app('" . TextLimit::class . "')->render($params); ?>";
        });

    }
}
