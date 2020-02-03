<?php

namespace Hanson\Rainbow;

use Illuminate\Support\ServiceProvider;

class RainbowServiceProvider extends ServiceProvider
{
    public function boot(Rainbow $extension)
    {
        if (!Rainbow::boot()) {
            return;
        }

        $cssPath = 'vendor/laravel-admin/AdminLTE/dist/css/';

        if ($this->app->runningInConsole()) {
            $this->publishes(
                [$extension->blue() => public_path($cssPath)],
                'rainbow-blue'
            );
            $this->publishes(
                [$extension->whiteBlue() => public_path($cssPath)],
                'rainbow-white-blue'
            );
            $this->publishes(
                [$extension->red() => public_path($cssPath)],
                'rainbow-red'
            );
            $this->publishes(
                [$extension->orange() => public_path($cssPath)],
                'rainbow-orange'
            );
            $this->publishes(
                [$extension->yellow() => public_path($cssPath)],
                'rainbow-yellow'
            );
            $this->publishes(
                [$extension->olive() => public_path($cssPath)],
                'rainbow-olive'
            );
            $this->publishes(
                [$extension->cyan() => public_path($cssPath)],
                'rainbow-cyan'
            );
            $this->publishes(
                [$extension->green() => public_path($cssPath)],
                'rainbow-green'
            );
            $this->publishes(
                [$extension->origin() => public_path($cssPath)],
                'rainbow-origin'
            );
        }
    }
}
