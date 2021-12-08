<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Lessonable
{
    public function lessons(): MorphMany;
}