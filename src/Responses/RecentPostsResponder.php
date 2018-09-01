<?php

namespace Stack\Nova\Responses;

class RecentPostsResponder
{
    public static function tablesNotFound()
    {
        return response()->json(['error' => true, 'message' => 'Blog tables not found.'], 500);
    }

    public static function resourcesNotFound()
    {
        return response()->json(['error' => true, 'message' => 'No recent post found.'], 404);
    }
}
