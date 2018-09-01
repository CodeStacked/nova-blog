<?php

namespace Stack\Nova\Resources;

use Stack\Nova\Cards\RecentPosts;
use Illuminate\Http\Resources\Json\JsonResource;

class RecentPost extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'postsUriKey' => RecentPosts::getOption('postUriKey'),
            'usersUriKey' => RecentPosts::getOption('userUriKey'),
            'title' => $this->title,
            'created_at' => $this->created_at->format(RecentPosts::getOption('dateFormat')),
            'author' => new Author($this->whenLoaded(RecentPosts::getOption('authorRelationName')))
        ];
    }
}
