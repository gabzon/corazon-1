<?php

namespace App\Models;

use App\Traits\UserBookmarksTrait;
use App\Traits\UserFavoritesTrait;
use App\Traits\UserRegistrationsTrait;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use InteractsWithMedia;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use UserFavoritesTrait;
    use UserBookmarksTrait;
    use UserRegistrationsTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'facebook_id',        
        'facebook_token',
        'instagram_id',
        'google_id',
        'idn',
        'username',
        'birthday',
        'gender',
        'avatar',
        'profession',
        'nationality',
        'biography',
        'work_status',
        'unemployement_proof',
        'unemployement_expiry_date',
        'work_status_verified',
        'mobile',
        'phone',
        'mobile_verified_at',
        'phone_verified_at',
        'price_hour',
        'address',
        'address_info',
        'zip',
        'city',
        'state',
        'country',
        'lat',
        'lng',
        'facebook',
        'instagram',
        'youtube',
        'tiktok',
        'twitter',
        'role',
        'is_super',
        'last_login_at',
        'last_login_ip',
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
    public function team()
    {
        return $this->belongsToMany(Organization::class, 'organization_user', 'user_id', 'organization_id')
                    ->withPivot('role')
        // ->wherePivot('role', 'student')
                    ->withTimestamps();   
    }

    public function rolesInOrganization($id)
    {
        return DB::table('organization_user')->where('organization_id',$id)->where('user_id', $this->id)->get();
    }

    public function manageOrganization($id):bool
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
        
        if ($this->profile_photo_path) {
            return $this->profile_photo_url;
        }

        return $this->avatar ?? 'https://eu.ui-avatars.com/api/?name='. urlencode($this->name) .'&background='. $background .'&color=ffffff';
    }

    public function hasManagementRights()
    {
        if ($this->is_super == true) {
            return true;
        }

        return $this->manages()->count() > 0;
    }

    /**
     * Accessor for Age.
     */
    public function getAgeAttribute()
    {        
        return Carbon::parse($this->birthday)->age;        
    }
    
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role)
    {
        $this->roles()->sync($role);
    }

    public function hasRole($id)
    {
        return in_array($id, $this->roles()->pluck('id')->toArray());
    }

    public function styles()
    {
        return $this->belongsToMany(Style::class);
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