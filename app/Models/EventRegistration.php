<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Str;

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
}


