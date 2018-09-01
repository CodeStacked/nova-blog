<?php

namespace Stack\Nova\Observers;

use Illuminate\Support\Facades\Storage;
use Stack\Nova\Models\Image;

class ImageObserver
{
    /**
     * Handle the image "deleting" event.
     *
     * @param Image $image
     *
     * @return void
     */
    public function deleting(Image $image)
    {
        Storage::disk('public')->delete($image->filename);
        Storage::disk('public')->delete('thumbs/'.$image->thumbnail);
    }
}
