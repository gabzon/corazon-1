<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'description',
        'deadline',
        'full_price',
        'promo_price',
        'content',
        'video',
        'thumbnail',
        'qty',        
        'ordered',
        'public',
        'status',
        'user_id',
    ];     


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'decimal',
        'deadline' => 'datetime',
    ];

    public function getAvailabilityPercentageAttribute()
    {
        return round(100 - (($this->ordered * 100)/$this->qty));
    }

    public function hasExpired():bool
    {
        return $this->deadline->lessThan(now());
    }

    public function hasReachedAvailabilityLimit()
    {
        return $this->ordered >= $this->qty;
    }
}
