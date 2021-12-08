<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Interest extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function interestable()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {        
        return Str::afterLast($this->likeable_type, '\\');
    }
}
