<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Registrable
{
    public function registrations(): MorphMany;
}