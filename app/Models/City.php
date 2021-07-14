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
        'content',
        'state',
        'region',
        'subregion',
        'code',
        'lng',
        'lat',
        'postal_code',
        'country',
        'alpha2Code',
        'alpha3Code',
        'iataCode',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'long' => 'decimal:8',
        'lat' => 'decimal:8',
    ];
}
