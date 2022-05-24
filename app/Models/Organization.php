<?php

namespace App\Models;

use App\Contracts\Favoriteable;
use App\Contracts\Lessonable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;

class Organization extends Model implements HasMedia, Favoriteable
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


    public function creator()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id');
    }

    public function team()
    {
        return $this->belongsToMany(User::class, 'organization_user', 'organization_id', 'user_id')
                    ->withPivot('role')
                    ->wherePivotIn('role', ['manager','instructor','organizer','dj','bouncer','publisher','assistant','team'])
                    ->withTimestamps();
    }

    public function isTeamMember($id)
    {        
        return $this->team()->where('user_id', $id)->exists();  
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'organization_user', 'organization_id', 'user_id')
                    ->withPivot('role')        
                    ->withTimestamps();
    }

    public function hasMemeber($uid)
    {        
        return $this->members()->where('user_id',$uid)->exists();        
    }

    public function managers()
    {
        return $this->belongsToMany(User::class, 'organization_user', 'organization_id', 'user_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'manager')
                    ->withTimestamps();
    }

    public function hasManager($id)
    {
        return in_array($id, $this->managers()->pluck('user_id')->toArray());
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'organization_user', 'organization_id', 'user_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'instructor')
                    ->withTimestamps();
    }
    
    public function hasTeacher($id)
    {
        return in_array($id, $this->teachers()->pluck('user_id')->toArray());
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'organization_user', 'organization_id', 'user_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'student')
                    ->withTimestamps();
    }

    public function hasStudent($id)
    {
        return in_array($id, $this->students()->pluck('user_id')->toArray());
    }

    public function styles()
    {
        return $this->belongsToMany(Style::class)->withTimestamps();
    }

    public function hasStyle($id)
    {
        return in_array($id, $this->styles()->pluck('style_id')->toArray());
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
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

    public function lessons()
    {
        return $this->hasMany(Lesson::class);        
    }

    public function hasLesson(Lessonable $lessonable):bool
    {
        if (! $lessonable->exists) {
            return false;
        }
        return $lessonable->lessons()->whereHas('organization', fn(Builder $query) => $query->whereId($this->id))->exists();
    }

    public function addLesson(Lessonable $lessonable):self
    {
        if ($this->hasLesson($lessonable)) {            
            return $this;
        }

        (new Lesson())
                ->organization()->associate($this)
                ->user()->associate(auth()->user())
                ->lessonable()->associate($lessonable)
                ->save();
        return $this;
    }

    public function favorites(): BelongsToMany
    {        
        return $this->belongsToMany(User::class,'favorite_organization','organization_id','user_id')->withTimeStamps();        
    }    

    public function getIconAttribute()
    {
        if ($this->getMedia('organization-icons')->last() != null) 
        {
            return $this->getMedia('organization-icons')->last()->getUrl();
        }
        return 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background=4338ca&color=ffffff';
    }

    public function scopeInCity($query, $city)
    {
        if (!empty($city)) {
            return $query->where('city_id', $city);
        }
        return $query;
    }
}