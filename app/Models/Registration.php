<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Str;

class Registration extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'status',
        'role',
        'option',
        'user_id',
        'order_id',
        'registrable_id',
        'registrable_type',
        'price_id',
    ];
    
    protected $casts = [
        'id'            => 'integer',
        'registrable_id'=> 'integer',
        'user_id'       => 'integer',
        'order_id'      => 'integer',
        'price_id'      => 'integer',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function order()
    {
        return $this->belongsTo(Order::class)->withDefault();
    }

    public function price()
    {
        return $this->belongsTo(Price::class)->withDefault();
    }

    public function registrable()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {        
        return Str::afterLast($this->registrable_type, '\\');
    }
}