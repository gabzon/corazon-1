<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
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
        'postal_code',        
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
}
