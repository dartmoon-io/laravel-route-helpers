<?php

namespace Dartmoon\LaravelRouteHelper;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelRouteHelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerMacros();
    }

    public function registerMacros()
    {
        $this->registerRouteWhenMacro();
    }

    protected function registerRouteWhenMacro()
    {
        Route::macro('when', function ($condition, $callback) {
            if ($condition) {
                $this->group([], $callback);
            }

            return $this;
        });
    }
}
