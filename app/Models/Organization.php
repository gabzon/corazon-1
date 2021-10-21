<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;

class Organization extends Model implements HasMedia
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
        'video',
        'logo',
        'about',
        'contact',
        'email',
        'phone',
        'website',
        'oid',
        'founded',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
        'status',
        'type',
        'address',
        'address_info',
        'zip',        
        'lat',
        'lng',
        'city_id',
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
        'city_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    
    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    
    public function prices()
    {
        return $this->morphMany(Price::class, 'priceable');
    }

}
