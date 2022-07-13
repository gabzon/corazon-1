<?php

namespace App\Models;

use App\Models\Concerns\Likes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Location extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'shortname',
        'type',
        'facebook_id',
        'google_id',

        'contact',
        'email',
        'phone',
        'website',
        'comments',

        'address',        
        'address_info',
        'zip',        
        'neighborhood',
        'entry_code',
        'google_maps_shortlink',
        'google_maps',
        'public_transportation',
        'lng',
        'lat',
        
        'facebook',
        'youtube',
        'instagram',
        'twitter',
        'tiktok',

        'comments',
        'has_sink',
        'has_bar',
        'has_fridge',
        'has_hall',
        'has_changeroom',
        'has_lockers',
        'has_wc',
        'has_separate_wc',
        'has_shower',
        

        'contract',
        'video',

        'user_id',
        'city_id',        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'        => 'integer',
        'user_id'   => 'integer',
        'city_id'   => 'integer',        
        'has_sink' => 'boolean',
        'has_bar' => 'boolean',
        'has_fridge' => 'boolean',
        'has_hall' => 'boolean',
        'has_changeroom' => 'boolean',
        'has_lockers' => 'boolean',
        'has_wc' => 'boolean',
        'has_separate_wc' => 'boolean',
        'has_shower' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function spaces()
    {
        return $this->hasMany(\App\Models\Space::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function scopeByCity($query, $city)
    {
        if ($city) {
            return $query->where('city_id', $city);
        }
        return $query;
    }

    public function getPhotoAttribute()
    {        
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }

    public function getCoverImageAttribute()
    {
        if ($this->getMedia('location-logo')->last() != null){
            return $this->getMedia('location-logo')->last()->getUrl();
        }
        
        if ($this->logo) {
            return $this->logo;
        }
        
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }

    public function getIconAttribute()
    {
        if ($this->getMedia('location-icon')->last() != null){
            return $this->getMedia('location-icon')->last()->getUrl();
        }
        
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }

    public function getFacadeImageAttribute()
    {
        if ($this->getMedia('location-facade')->last() != null){
            return $this->getMedia('location-facade')->last()->getUrl();
        }
                
        if ($this->facade) {
            return $this->facade;
        }

        if ($this->logo) {
            return $this->logo;
        }
        
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }
}



