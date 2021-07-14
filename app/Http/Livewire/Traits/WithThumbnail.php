<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Str;

trait WithThumbnail
{
    public function handleThumbnailUpload($model, array $thumb)
    {   
        $tableName = $model->getTable();

        if ($thumb === [0]) {
            $model->thumbnail = '';
            $model->getMedia($tableName)->last()->delete();
            $model->save();
            return;
        }
        
        if (is_null($model->thumbnail) || ($model->thumbnail != $thumb['path'])) {            
            $name = 'corazon-' . Str::slug($model->title,'-') . '-' . date('s') . '.' . $thumb['ext'];                    
            $model->addMedia($thumb['path'])
                 ->withResponsiveImages()
                 ->usingFileName($name)      
                 ->toMediaCollection($tableName);
            $model->thumbnail = $model->getMedia($tableName)->last()->getUrl();
            $model->save();
        }
    }
}