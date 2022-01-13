<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'embed',
        'url',
        'organization_id',
        'user_id',
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class)->withTimestamps();
    }

    public function getYoutubeIdFromEmbedAttribute()
    {        
        if ($this->embed) {            
            return Str::between($this->embed, '<iframe width="560" height="315" src="https://www.youtube.com/embed/', '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        }
        return null;        
    }
    
    public function styles()
    {
        return $this->belongsToMany(Style::class);
    }
}
