<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [        
        'amount',
        'label',
        'currency',
        'description',
        'can_expire',
        'expiry_date',
        'priceable',
    ];    

    public function priceable()
    {
        return $this->morphTo();
    }
}
