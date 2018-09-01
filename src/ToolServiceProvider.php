<?php

namespace Stack\Nova;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
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

        // Recent Posts
        Nova::serving(function (ServingNova $event) {
            Nova::script('recent-posts', __DIR__.'/../dist/js/card.js');
            Nova::style('recent-posts', __DIR__.'/../dist/css/card.css');
        });
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
                ->prefix('stack/nova-blog')
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
