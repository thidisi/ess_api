<?php

namespace App\Providers;

use App\Utils\OptionUtility;
use App\Utils\ResponseUtility;
use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('responder', static function() {
            return new ResponseUtility();
        });

        $this->app->bind('option', static function() {
            return new OptionUtility();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
