<?php

namespace Hanson\Rainbow;

use Illuminate\Support\ServiceProvider;

class RainbowServiceProvider extends ServiceProvider
{
    public function boot($extension)
    {
        $cssPath = 'vendor/laravel-admin/AdminLTE/dist/css/';

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path($cssPath)],
                'rainbow'
            );
        }
    }
}
