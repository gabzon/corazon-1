<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EventRegistration extends Pivot
{
    use HasFactory;

    protected $table = 'event_registrations';  

    protected $fillable = [
        'status',
        'role',
        'option',
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
        $this->belongsTo(User::class);
    }

    public function event()
    {
        $this->belongsTo(Event::class);
    }

    public function order()
    {
        $this->belongsTo(Event::class);
    }
}
