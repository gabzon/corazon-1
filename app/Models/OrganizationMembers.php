<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Builder;

class OrganizationMembers extends Pivot
{
    use HasFactory;

    protected $table = 'organization_user';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id')->withDefault();
    }
    
    public function scopeByUser($query, $user)
    {
        if (!empty($user)) {
            return $query->whereHas('user', function (Builder $q) use ($user) {
                $q->where('name', 'like', '%'. $user . '%')
                ->orWhere('email', 'like', '%'. $user . '%')
                ->orWhere('username', 'like', '%'. $user . '%');
            });
        }
        return $query;
    }
    
    public function scopeByGender($query, $gender)
    {
        if (!empty($gender)) {
            return $query->whereHas('user', function (Builder $q) use ($gender) {
                $q->where('gender', $gender); 
            });
        }
        return $query;
    }

    public function scopeByRole($query, $role)
    {
        if (!empty($role)) {
            return $query->where('role', $role);
        }
        return $query;
    }
}