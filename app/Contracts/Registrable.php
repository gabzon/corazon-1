<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface Registrable
{
    public function registrations(): BelongsToMany;
}