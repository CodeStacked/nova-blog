<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Stack\Nova\Cards\RecentPosts;
use Stack\Nova\Resources\RecentPost;
use Stack\Nova\Responses\RecentPostsResponder;
use Stack\Nova\Bootstrap\Blog;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::get('/check-migrations', function (Request $request) {
    return response()->json([
        'installed' => Blog::isInstalled(),
    ], 200);
});

Route::get('/migrate-tables', 'Stack\Nova\Http\Controllers\MigrationController@execute');
Route::get('/reset-content', 'Stack\Nova\Http\Controllers\ResetController@execute');
Route::get('/uninstall', 'Stack\Nova\Http\Controllers\UninstallController@execute');

Route::get('/fetch-latest', function () {
    if (!Schema::hasTable(RecentPosts::getOption('postUriKey'))) {
        return RecentPostsResponder::tablesNotFound();
    }

    $recentPosts = (RecentPosts::getOption('postModel'))::with(RecentPosts::getOption('authorRelationName'))
        ->where('created_at', '>=', now()->subDays(2))
        ->take(RecentPosts::getOption('postsNumber'))
        ->orderBy('created_at', 'desc')
        ->get();

    return response()->json(RecentPost::collection($recentPosts), 200);
});
