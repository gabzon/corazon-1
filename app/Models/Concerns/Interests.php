<?php

namespace App\Models\Concerns;

use App\Models\Interest;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Interests
{
    public function interests(): MorphMany
    {
        return $this->morphMany(Interest::class, 'interestable');
    }
}