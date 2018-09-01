<?php

namespace Stack\Nova;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Stack\Nova\Bootstrap\Blog;

class BlogTool extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-blog', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-blog', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        if (Blog::isInstalled()) {
            return view('nova-blog::navigation-installed');
        }
        return view('nova-blog::navigation');
    }
}
