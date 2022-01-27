<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CourseRegistration extends Pivot
{
    use HasFactory;

    protected $table = 'course_registrations';
        
    protected $fillable = [
        'status',
        'role',
        'option',
        'comments',
        'user_id',
        'order_id',
        'course_id',            
    ];
    
    protected $casts = [
        'id'            => 'integer',
        'course_id'     => 'integer',
        'user_id'       => 'integer',
        'order_id'      => 'integer',
        'price_id'      => 'integer',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class)->withDefault();
    }

    public function price()
    {
        return $this->belongsTo(Price::class)->withDefault();
    }

    public function course()
    {
        return $this->belongsTo(Course::class)->withDefault();
    }
}


