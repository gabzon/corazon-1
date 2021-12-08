<?php

namespace App\Models\Concerns;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Registrations
{
    public function registrations(): MorphMany
    {
        return $this->morphMany(Registration::class, 'registrable');
    }

    public function sayHi()
    {
        return 'hi';
    }
}