<?php

namespace App\Providers;

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
        if (!defined('ValidationError')) define('ValidationError', 422);
        if (!defined('NotFound')) define('NotFound', 404);
        if (!defined('Success')) define('Success', 200);
        if (!defined('Unauthorized')) define('Unauthorized', 401);
    }
}
