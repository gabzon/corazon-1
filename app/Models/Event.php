<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, SoftDeletes;
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
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'publish_at',
        'min_price',
        'max_price',                
        'currency',
        'video',
        'thumbnail',
        'type',
        'status',
        'organiser',
        'contact',
        'email',
        'phone',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
        'facebook_id',
        'user_id',
        'location_id',
        'city_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'start_date'    => 'date:Y-m-d',
        'start_time'    => 'datetime:H:i',
        'end_date'      => 'date:Y-m-d',
        'end_time'      => 'datetime:H:i',
        'publish_at'    => 'date:Y-m-d',
        'min_price'     => 'decimal:2',
        'max_price'     => 'decimal:2',                
        'user_id'       => 'integer',
        'location_id'  => 'integer',
        'city_id'       => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }

    public function city()
    {
        return $this->belongsTo(\App\Models\City::class);
    }

    public function styles()
    {
        return $this->belongsToMany(\App\Models\Style::class);
    }

    public function hasStyle($id)
    {
        return in_array($id, $this->styles()->pluck('style_id')->toArray());
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    public function getTime($time)
    {
        return Carbon::createFromFormat('H:i:s', $this->attributes[$time]);        
    }

    public function getPriceAttribute()
    {
        $min = '';
        $max = '';
        if (isset($this->min_price)) {
            if ($this->min_price > 0) {
                $min = floatval($this->min_price);
            }
        } else {
            $min = 'free';
        }
        
        if (isset($this->max_price)) {
            if ($this->max_price > 0) {
                $max = floatval($this->max_price);
            }
        }else {
            $max = 'free';
        }
        
        return $min != $max ? $this->currency . ' '. $min .' - '. $max : 'free';

    }

    public function scopeShouldExpire($query)
    {        
        return $query->where('status', 'active')                    
                     ->where('end_date','<=', Carbon::now());
    }

    public function expire()
    {
        return $this->update([ 'status' => 'finished' ]);
    }

    public function scopeIsActive($query)
    {
        return $query->whereStatus('active');
    }
}
