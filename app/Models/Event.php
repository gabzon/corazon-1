<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
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
        'is_free',                
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
        'is_online',
        'is_recurrent',
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
        'user_id'       => 'integer',
        'location_id'   => 'integer',
        'city_id'       => 'integer',
        'is_recurrent'  => 'boolean',
        'is_online'     => 'boolean',                
        'publish_at'    => 'datetime:Y-m-d H:i',          
    ];

    protected $dates = ['start_date', 'end_date'];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200);              
    }


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
    
    public function hasOrganization($id)
    {
        return in_array($id, $this->organizations()->pluck('organization_id')->toArray());
    }

    public function getTime($time)
    {
        return Carbon::createFromFormat('H:i:s', $this->attributes[$time]);        
    }

    public function scopeShouldExpire($query)
    {      
        $today = Carbon::now()->format('Y-m-d');          
        
        return $query->where('status', 'active')                    
                     ->whereDate('end_date','<', Carbon::now());                     
    }

    public function expire()
    {
        return $this->update([ 'status' => 'finished' ]);
    }

    public function scopeIsActive($query)
    {
        return $query->whereStatus('active');
    }

    public function scopeDisplayList($query)
    {
        return $query->select(['id','name','start_date','start_time','city_id','thumbnail'])->with(['city:id,name,country','styles:name']);
    }

    public function scopeInCity($query, $city)
    {
        if (!empty($city)) {
            return $query->where('city_id', $city);
        }
        return $query;
    }

    public function scopeStyle($query, $style)
    {        
        if (!empty($style)) {
            return $query->whereHas('styles', function (Builder $query_style) use ($style) {
                $query_style->where('style_id', $style);
            });            
        }
        return $query;
    }

    public function scopeType($query, $type)
    {
        if (!empty($type)) {
            return $query->where('type', $type);
        }
        return $query;
    }

    public function getThumbAttribute()
    {        
        if ($this->getMedia('events')->last() != null) {
            return $this->getMedia('events')->last()->getUrl('thumb');
        }
        return 'null';
    }

    public function prices()
    {
        return $this->morphMany(Price::class, 'priceable');
    }


}
