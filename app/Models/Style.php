<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Style extends Model implements HasMedia
{       
    use InteractsWithMedia;
    use HasFactory, SoftDeletes;

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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function childs()
    {
        return $this->hasMany(Style::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Style::class, 'parent_id');        
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    public function hasOrganization($id)
    {
        return in_array($id, $this->organizations()->pluck('organization_id')->toArray());
    }
}
