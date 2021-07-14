<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'provider',
        'method',
        'amount',
        'amount_received',
        'currency',
        'molley_payment_id',
        'status',
        'received_date',
        'comments',
        'user_id',
        'order_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'received_date' => 'date',
        'user_id' => 'integer',
        'order_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function order()
    {
        return $this->belongsTo(\App\Order::class);
    }
}
