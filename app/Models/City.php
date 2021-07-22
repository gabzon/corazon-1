<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',

        'state',
        'region',
        'zip',

        'code',
        'iataCode',
        'population',

        'country',
        'alpha2Code',
        'alpha3Code',
        'world_region',
        
        'lng',
        'lat',

        'emblem',
        'image',
        
        'description',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'lng'   => 'decimal:8',
        'lat'   => 'decimal:8',
    ];
}
