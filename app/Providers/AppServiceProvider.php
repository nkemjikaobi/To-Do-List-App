<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
         if($this->app->environment('production')) {
\URL::forceScheme('https');
        }
    }
    // public function boot(UrlGenerator $url)
    // {
    //     Schema::defaultStringLength(191);

    //     if(env('REDIRECT_HTTPS')) {
    //         $url->formatScheme('https');
    //     }
    // }

    // /**
    //  * Register any application services.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     if(env('REDIRECT_HTTPS')) {
    //         $this->app['request']->server->set('HTTPS', true);
    //     }
    // }
}
