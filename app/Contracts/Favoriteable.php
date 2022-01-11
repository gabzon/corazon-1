<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface Favoriteable
{
    public function favorites(): BelongsToMany;
}