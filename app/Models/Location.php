<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

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
        'comments',
        'type',
        'contact',
        'website',
        'facebook',
        'youtube',
        'instagram',
        'twitter',
        'tiktok',
        'email',
        'phone',
        'contract',
        'video',
        'entry_code',
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
        'id' => 'integer',
        'user_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function classrooms()
    {
        return $this->hasMany(\App\Models\Classroom::class);
    }
}
