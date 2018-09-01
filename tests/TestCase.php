<?php

namespace Stack\Nova\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use Stack\Nova\ToolServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();

        Route::middlewareGroup('nova', []);
    }

    protected function getPackageProviders($app)
    {
        return [
            ToolServiceProvider::class,
        ];
    }
}
