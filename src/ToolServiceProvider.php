<?php

namespace Stack\Nova;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Stack\Nova\Models\Image;
use Stack\Nova\Bootstrap\Blog;
use Stack\Nova\Observers\ImageObserver;
use Stack\Nova\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-blog');

        $this->app->booted(function () {
            $this->routes();

            Blog::injectToolResources();
        });

        Image::observe(ImageObserver::class);

        $this->publishes([
            $this->configPath() => config_path('nova-blog.php'),
        ], 'nova-blog-config');
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/nova-blog')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'nova-blog');
    }

    /**
     * @return string
     */
    protected function configPath()
    {
        return __DIR__ . '/../config/nova-blog.php';
    }
}
