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

    public function likes()
    {
        return $this->hasMany(Like::class);
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

    public function interests()
    {
        return $this->hasMany(Interest::class);
    }

    public function interest(Interestable $interestable): self
    {
        if ($this->hasInterest($interestable)) {
            return $this;
        }

        (new Interest())->user()->associate($this)->interestable()->associate($interestable)->save();

        return $this;
    }

    public function uninterest(Interestable $interestable):self
    {
        if (! $this->hasInterest($interestable)) {
            return $this;    
        }

        $interestable->interests()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->delete();

        return $this;
    }

    public function hasInterest(Interestable $interestable):bool
    {
        if (! $interestable->exists) {
            return false;
        }

        return $interestable->interests()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->exists();
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function register(Registrable $registrable): self
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
    
    public function isRegistered(Registrable $registrable):bool
    {
        if (! $registrable->exists) {
            return false;
        }

        return $registrable->registrations()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->exists();
    }
}
