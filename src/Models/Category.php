<?php

namespace Stack\Nova\Models;

use Illuminate\Database\Eloquent\Model;
use Stack\Nova\Traits\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use Sluggable;

    /**
     * Model fillable fields.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
