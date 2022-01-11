<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Favorite extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function favoritable()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {        
        return Str::afterLast($this->favoritable_type, '\\');
    }
    
}
