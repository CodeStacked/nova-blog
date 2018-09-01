<?php

namespace Stack\Nova\Cards;

use Laravel\Nova\Card;

class RecentPosts extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * Your main application post model.
     *
     * @var string
     */
    public static $postModel;

    /**
     * Your post author relationship name.
     *
     * @var string
     */
     public static $authorRelationName;

    /**
     * The number of posts to fetch.
     *
     * @var string
     */
     public static $postsNumber;

    /**
     * The desired date format.
     *
     * @var string
     */
     public static $dateFormat;

    /**
     * The desired posts uri key.
     *
     * @var string
     */
     public static $postUriKey;

    /**
     * The desired users uri key.
     *
     * @var string
     */
    static $userUriKey;

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'recent-posts';
    }

    /**
     * Card constructor.
     *
     * @param string $authorRelationName
     * @param string $dateFormat
     * @param int $postsNumber
     * @param string $postModel
     * @param string $userUriKey
     */
    public function __construct(
        string $authorRelationName = 'author',
        string $dateFormat = 'Y-m-d',
        int $postsNumber = 5,
        string $postModel = 'App\Post',
        string $userUriKey = 'users'
    ) {
        static::$postModel = $postModel;
        static::$authorRelationName = $authorRelationName;
        static::$dateFormat = $dateFormat;
        static::$postsNumber = $postsNumber;
        static::$postUriKey = str_plural(strtolower(class_basename($postModel)));
        static::$userUriKey = $userUriKey;

        parent::__construct();
    }

    public static function getOption(string $optionName)
    {
        if (!static::${$optionName}) {
            return null;
        }

        return static::${$optionName};
    }
}
