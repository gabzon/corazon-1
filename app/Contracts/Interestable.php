<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Interestable
{
    public function interests(): MorphMany;
}