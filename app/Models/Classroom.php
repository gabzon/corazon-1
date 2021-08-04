<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'm2',
        'capacity',
        'limit_couples',
        'price_hour',
        'price_month',
        'currency',
        'floor_type',
        'mirror_type',
        'has_bar',
        'dance_shoes',
        'description',
        'color',
        'location_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'm2'            => 'float',
        'capacity'      => 'integer',
        'price_hour'    => 'float',
        'price_month'   => 'float',
        'has_bar'       => 'boolean',
        'dance_shoes'   => 'boolean',
        'location_id'   => 'integer',
        'user_id'       => 'integer',
    ];


    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}