<?php

namespace Stack\Nova\Bootstrap;

use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Schema;
use Stack\Nova\Resources\Tag;
use Stack\Nova\Resources\Post;
use Stack\Nova\Resources\Image;
use Stack\Nova\Resources\Comment;
use Stack\Nova\Resources\Category;

class Blog
{
    public static function isInstalled()
    {
        return
            Schema::hasTable('posts') &&
            Schema::hasTable('categories') &&
            Schema::hasTable('comments') &&
            Schema::hasTable('tags') &&
            Schema::hasTable('post_tag') &&
            Schema::hasTable('images');
    }

    public static function injectToolResources()
    {
        if (! self::isInstalled()) {
            return;
        }

        Nova::resources([
            Category::class,
            Post::class,
            Comment::class,
            Tag::class,
            Image::class,
        ]);
    }
}
