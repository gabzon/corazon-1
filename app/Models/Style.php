<?php

namespace App\Models;

use App\Contracts\Interestable;
use App\Contracts\Likeable;
use App\Models\Concerns\Interests;
use App\Models\Concerns\Likes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Style extends Model implements HasMedia, Likeable, Interestable
{       
    use InteractsWithMedia;
    use HasFactory, SoftDeletes;
    use Likes;
    use Interests;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'color',
        'thumbnail',
        'origin',
        'family',
        'music',
        'year',
        'video',
        'description',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function childs()
    {
        return $this->hasMany(Style::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Style::class, 'parent_id');        
    }

    public function interested()
    {
        return $this->morphMany(Interest::class, 'interestable');
    }
}
