<?php

namespace App\Models;

use App\Contracts\Interestable;
use App\Contracts\Likeable;
use App\Contracts\Registrable;
use App\Models\Like;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Socialite\Facades\Socialite;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use InteractsWithMedia;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'facebook_id',
        'role',        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday'          => 'date:Y-m-d'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function manages()
    {
        return $this->belongsToMany(Organization::class, 'organization_user', 'user_id', 'organization_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'manager')
                    ->withTimestamps();
    }
    
    public function teaches()
    {
        return $this->belongsToMany(Organization::class, 'organization_user', 'user_id', 'organization_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'instructor')
                    ->withTimestamps();
    }

    public function schools()
    {
        return $this->belongsToMany(Organization::class, 'organization_user', 'user_id', 'organization_id')
                    ->withPivot('role')
                    ->wherePivot('role', 'student')
                    ->withTimestamps();
    }

    public function manageOrganization($id)
    {
        return in_array($id, $this->manages()->pluck('organization_id')->toArray());
    }
    
    public function teachInOrganization($id)
    {
        return in_array($id, $this->teaches()->pluck('organization_id')->toArray());
    }

    public function learnsInOrganization($id)
    {
        return in_array($id, $this->schools()->pluck('organization_id')->toArray());
    }

    public function getPhotoAttribute()
    {                
        $background = $this->gender == 'male' ? '0D8ABC': 'FF69B4';
        return $this->avatar ?? 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background='. $background .'&color=ffffff';
    }

    public function likesCourses()
    {
        
        return $this->belongsToMany(Course::class,'course_like','user_id','course_id')->withTimeStamps();
    }

    public function like(Likeable $likeable): self
    {
        if ($this->hasLiked($likeable)) {
            return $this;            
        }

        (new Like())->user()->associate($this)->likeable()->associate($likeable)->save();
        
        return $this;
    }

    public function unlike(Likeable $likeable): self
    {
        if (! $this->hasLiked($likeable)) {
            return $this;
        }
        
        $likeable->likes()->whereHas('user', fn(Builder $q) => $q->whereId($this->id))->delete();
        
        return $this;
    }

    public function hasLiked(Likeable $likeable):bool
    {
        if (! $likeable->exists) {
            return false;
        }
                
        return $likeable->likes()->whereHas('user', fn(Builder $q) => $q->whereId($this->id))->exists();
    }

    public function bookmarkedEvents()
    {
        return $this->belongsToMany(Event::class,'bookmark_event','user_id','event_id')->withTimeStamps();
    }

    public function bookmarkEvent(Event $event):self
    {
        if ($this->hasEventBookmarked($event)) {
            return $this;
        }
        (new BookmarkEvent())->user()->associate($this)->event()->associate($event)->save();        

        return $this;
    }

    public function hasEventBookmarked(Event $event):bool
    {
        if (! $event->exists) {
            return false;
        }

        return $event->bookmarks()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->exists();
    }

    public function unbookmarkEvent(Event $event):self
    {
        if (! $this->hasEventBookmarked($event)) {
            return $this;    
        }

        $event->bookmarks()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->delete();

        return $this;
    }

    public function coursesRegistrations()
    {
        return $this->belongsToMany(Course::class,'course_register','user_id','course_id')->withTimestamps();
    }

    public function registerForCourse(Course $course): self
    {
        if ($this->isRegistered($registrable)) {
            return $this;
        }

        (new Registration(['role'=>'student', 'option' => $registrable->name ]))
            ->user()->associate($this, ['role'=>'student'])
            ->registrable()->associate($registrable)
            ->save();
            
        return $this;
    }

    public function unregister(Registrable $registrable):self
    {
        if (! $this->isRegistered($registrable)) {
            return $this;
        }
        $registrable->registrations()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->delete();
        
        return $this;
    }
    
    public function isRegisteredForCourse(Course $course):bool
    {
        if (! $course->exists) {
            return false;
        }

        return $course->registrations()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->exists();
    }
}
