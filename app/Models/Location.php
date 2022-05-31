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
        
        'address',        
        'address_info',
        'zip',        
        'neighborhood',
        'entry_code',

        'comments',
        'type',
        
        'website',
        'facebook',
        'youtube',
        'instagram',
        'twitter',
        'tiktok',

        'has_sink',
        'has_bar',
        'has_fridge',
        'has_hall',
        'has_changeroom',
        'has_lockers',
        'has_wc',
        'has_separate_wc',
        'has_shower',
        
        'contact',
        'email',
        'phone',
        'contract',
        'video',
        
        'facebook_id',
        'google_id',
        'lng',
        'lat',

        'google_maps_shortlink',
        'google_maps',
        'public_transportation',
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
        // $this->avatar ?? $course->location->photo ?? ''
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }
}



