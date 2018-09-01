<?php

return [
    'resources' => [
        'users' => [
            'model' => env('BLOG_USER_MODEL', App\User::class),
        ],

        'posts' => [
            'search' => ['id', 'title', 'summary', 'body'],
        ],

        'categories' => [
            'search' => ['id', 'name', 'description'],
        ],

        'comments' => [
            'search' => ['id', 'name'],
        ],

        'tags' => [
            'search' => ['id', 'name'],
        ],
    ],

    'user_model' => env('BLOG_USER_MODEL', App\User::class),

    'image_settings' => [
        'disk' => env('BLOG_DISK_NAME', 'public'),
        'path' => env('BLOG_IMAGE_PATH', ''),
        'path_thumb' => env('BLOG_THUM_PATH', 'thumb/'),
    ],

    'image_thumb_settings' => [
        'width' => env('BLOG_THUMB_WIDTH', '200'),
        'height' => env('BLOG_THUMB_HEIGHT', '200'),
    ],
];
