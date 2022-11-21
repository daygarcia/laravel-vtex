<?php

namespace LaravelVtex;

use Illuminate\Support\ServiceProvider;

class VtexServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */


    public function register()
    {
        $this->app->singleton('vtex', function () {
            return new Vtex();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/vtex.php' => config_path('vtex.php'),
        ]);
        // check if the App/Http/Requests/LaravelVtex directory exists
        /* if (!file_exists(app_path('Http/Requests/LaravelVtex/'))) {
            mkdir(app_path('Http/Requests/LaravelVtex/'), 0755, true);
        }
        $this->publishes([
            __DIR__ . '/app/Http/Requests/' => app_path('Http/Requests/LaravelVtex/'),
        ]); */

        $this->client_id = config('vtex.app_key');
        $this->client_secret = config('vtex.app_token');
        $this->urls = config('vtex.env');
    }
}
