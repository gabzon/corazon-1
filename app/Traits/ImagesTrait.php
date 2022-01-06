<?php

namespace App\Traits;

trait ImagesTrait {
    


    public function getPhotoAttribute()
    {

    }

    public function getIconUrl($collection)
    {
        if ($this->getMedia($collection)->last() != null) {
            return $this->getMedia($collection)->last()->getUrl();
        }
    }

}