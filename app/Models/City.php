<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class City extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'state',
        'region',
        'zip',
        'code',
        'iataCode',
        'population',
        'country',
        'alpha2Code',
        'alpha3Code',
        'world_region',    
        'lng',
        'lat',
        'emblem',
        'image',        
        'description',
        'user_id',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'lng'   => 'decimal:8',
        'lat'   => 'decimal:8',
        'user_id'   => 'integer',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function organizations()
    {
        return $this->hasMany(Organization::class);        
    }

    public function getCoverImageAttribute()
    {
        if ($this->getMedia('city-image')->last() != null){
            return $this->getMedia('city-image')->last()->getUrl();
        }
        
        if ($this->thumbnail) {
            return $this->thumbnail;
        }
        
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }
}

