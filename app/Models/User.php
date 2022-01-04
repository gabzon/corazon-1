<?php

namespace App\Models;

use App\Contracts\Interestable;
use App\Contracts\Likeable;
use App\Contracts\Registrable;
use App\Models\Like;
use App\Models\Event;
use App\Traits\UserBookmarksTrait;
use App\Traits\UserLikesTrait;
use App\Traits\UserRegistrationsTrait;
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
    use UserLikesTrait;
    use UserBookmarksTrait;
    use UserRegistrationsTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
        'facebook_id',
        'role',        
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday'          => 'date:Y-m-d'
    ];

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

    

    // public function videoLessons()
    // {
    //     return $this->belongsToMany();
    // }
    
    // public function registerForEvent(Event $event):self
    // {
    //     if ($this->isRegisteredInEvent($event)) {
    //         return $this;
    //     }

    //     $this->eventRegistrations($event->id,['role'=>'student']);  
    //     return $this;                                                    
    // }      
    
    // public function unregisterFromEvent(Event $event):self
    // {
    //     if (! $this->isRegisteredInEvent($event)) {
    //         return $this;
    //     }
        
    //     $event->eventRegistrations()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->delete();
        
    //     return $this;
    // }
}
