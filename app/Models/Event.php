<?php

namespace App\Models;

use App\Contracts\Bookmarkable;
use App\Contracts\Favoriteable;
use App\Contracts\Registrable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Event extends Model implements HasMedia, Registrable, Favoriteable, Bookmarkable
{
    use HasFactory, SoftDeletes;
    use InteractsWithMedia;    

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'description',
        'start_date',
        'end_date',
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
        'start_date'    => 'datetime:Y-m-d H:i',          
        'end_date'      => 'datetime:Y-m-d H:i',          
    ];    

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(200)
              ->height(200);              
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function hasCourse($id)
    {        
        return $this->courses()->where('id', $id)->exists();        
    }

    // public function isRegistered($id)
    // {        
    //     return $this->registrations()->where('user_id',$id)->exists();
    // }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Course::class);
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

    public function invitees()
    {        
        return $this->belongsToMany(User::class, 'event_registration', 'event_id', 'user_id')
                    ->withPivot('status')
                    ->wherePivot('status', 'invitee')
                    ->withTimestamps();    
    }

    public function instructors()
    {
        return $this->belongsToMany(User::class, 'event_registrations', 'event_id', 'user_id')->using(EventRegistration::class)->wherePivot('role', 'instructor');        
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'event_registrations', 'event_id', 'user_id')->using(EventRegistration::class)->wherePivot('role', 'student');        
    }

    public function isInvited($id)
    {
        return in_array($id, $this->invitees()->pluck('organization_id')->toArray());
    }

    public function getTime($time)
    {
        return Carbon::createFromFormat('H:i:s', $this->attributes[$time]);        
    }

    public function scopeShouldExpire($query)
    {                    
        return $query->where('status', 'active')                    
                     ->whereDate('end_date','<', Carbon::now()->format('Y-m-d H:i:s'));                     
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

    public function scopeByOrganization($query, $org)
    {
        if (!empty($org)) {
            return $query->whereHas('organizations', function(Builder $q) use ($org){
                $q->where('organization_id', $org);
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

    public function bookmarks(): BelongsToMany
    {        
        return $this->belongsToMany(User::class,'bookmark_event','event_id','user_id')->withTimeStamps();        
    }

    public function favorites(): BelongsToMany
    {        
        return $this->belongsToMany(User::class,'event_favorite','event_id','user_id')->withTimeStamps();        
    }

    public function prices()
    {
        return $this->hasMany(EventPrice::class, 'event_price', );
    }

    public function getYoutubeIdFromEmbedAttribute()
    {        
        if ($this->video) {
            return Str::between($this->video, '<iframe width="560" height="315" src="https://www.youtube.com/embed/', '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        }
        return null;        
    }

    public function hasActiveOrganizations():bool
    {
        return in_array('active', $this->organizations()->pluck('status')->toArray());
    }

    public function canRegister():bool
    {
        if ($this->organizations()->count() < 1) {
            return false;
        }
        if (! $this->hasActiveOrganizations()) {
            return false;
        }
        return true;
    }

    // public function getVimeoIDfromEmbedAttribute()
    // {
    //     if ($this->video) {
    //         return Str::between($this->video,'<iframe src="https://player.vimeo.com/video/660749181?h')
    //     }
    //     <img srcset="https://vumbnail.com/12714406.jpg 640w, https://vumbnail.com/12714406_large.jpg 640w, https://vumbnail.com/12714406_medium.jpg 200w, https://vumbnail.com/12714406_small.jpg 100w" sizes="(max-width: 640px) 100vw, 640px" src="https://vumbnail.com/12714406.jpg" alt="Vimeo Thumbnail" />
    // }

    public function getIsOneDayEventAttribute():bool
    {
        if ($this->start_date->diffInHours($this->end_date) < 24) {
            return 1;    
        }
        return 0;
    }

    public function registrations(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'event_registrations','event_id','user_id')->withPivot(['status','role','option'])->withTimestamps();
    }

    public function isRegistered($id)
    {        
        return $this->registrations()->where('user_id',$id)->exists();
    }

    public function getCoverImageAttribute()
    {
        if ($this->getMedia('events')->last() != null){
            return $this->getMedia('events')->last()->getUrl();
        }
        
        if ($this->thumbnail) {
            return $this->thumbnail;
        }
        
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }


    public function scopeWithFilters($query, $city, $style, $type)
    {                
        return $query->when($city, function($query) use ($city) {
            $query->inCity($city);            
        })->when($style > 0, function($query) use ($style){
            $query->style($style);
        })->when($type, function($query) use ($type){
            $query->type($type);
        });
    }

    public function getOrgIdAttribute()
    {
        return $this->organizations()->pluck('organization_id')->toArray();
    }

    public function getplaceNameAttribute()
    {
        return $this->location->shortname ?? $this->location->name;
    }

}
