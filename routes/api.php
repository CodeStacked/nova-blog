<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
