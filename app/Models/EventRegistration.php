<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Builder;

class EventRegistration extends Pivot
{
    use HasFactory;

    protected $table = 'event_registrations';  

    protected $fillable = [
        'status',
        'role',
        'option',
        'comments',
        'event_id',
        'user_id',
        'order_id',
    ];

    protected $casts = [        
        'event_id'  => 'integer',
        'user_id'   => 'integer',
        'order_id'  => 'integer',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class)->withDefault();
    }

    public function order()
    {
        return $this->belongsTo(Event::class)->withDefault();
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

    public function scopeByStatus($query, $status)
    {
        if (!empty($status)) {
            return $query->where('status', $status);
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


