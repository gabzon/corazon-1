<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Str;

class PostService 
{
    public function handleThumbnailUpload(Post $post, array $thumb)
    {                
        if (is_null($post->thumbnail) || ($post->thumbnail != $thumb['path'])) {            
            $name = 'corazon-' . Str::slug($post->title,'-') . '-' . date('s') . '.' . $thumb['ext'];                    
            $post->addMedia($thumb['path'])
                 ->withResponsiveImages()
                 ->usingFileName($name)      
                 ->toMediaCollection('posts');
            $post->thumbnail = $post->getMedia('posts')->last()->getUrl();
            $post->save();
        }
    }
}