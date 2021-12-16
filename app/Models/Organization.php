<?php

namespace App\Models;

use App\Contracts\Lessonable;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;
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


    public function creator()
    {
        return $this->belongsTo(\App\Models\User::class,'user_id');
    }

    public function managers()
    {
        return $this->belongsToMany(User::class, 'organization_user', 'organization_id', 'user_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'manager')
                    ->withTimestamps();
    }

    public function hasManagers($id)
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

    public function events()
    {
        return $this->belongsToMany(Event::class);
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

    public function removeLesson(Lessonable $lessonable):self
    {
        
    }
}
