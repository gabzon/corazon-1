<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface Bookmarkable
{
    public function bookmarks(): BelongsToMany;
}