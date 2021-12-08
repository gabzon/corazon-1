<?php

namespace App\Models\Concerns;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Lessons
{
    public function lessons(): MorphMany
    {
        return $this->morphMany(Lesson::class, 'lessonable');
    }
}