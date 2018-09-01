<?php

namespace Stack\Nova\Http\Middleware;

use Stack\Nova\BlogTool;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(BlogTool::class)->authorize($request) ? $next($request) : abort(403);
    }
}
