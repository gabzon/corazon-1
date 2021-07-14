<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'subtotal',
        'vat',
        'quantity_discount',
        'user_status_discount',
        'coupon_discount',
        'coupon_code',
        'total',
        'comments',
        'method',
        'status',
        'author_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'subtotal' => 'decimal',
        'vat' => 'decimal',
        'quantity_discount' => 'decimal',
        'user_status_discount' => 'decimal',
        'coupon_discount' => 'decimal',
        'total' => 'decimal',
        'author_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function author()
    {
        return $this->belongsTo(\App\User::class);
    }
}
