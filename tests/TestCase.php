<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Dartmoon\LaravelRouteHelper\LaravelRouteHelperServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelRouteHelperServiceProvider::class,
        ];
    }
}