<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface Likeable
{
    public function likes(): BelongsToMany;
}