<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPrice extends Model
{
    use HasFactory;

    protected $fillable = [        
        'amount',
        'label',
        'currency',
        'description',
        
        'amount2',
        'label2',
        'deadline2',

        'amount3',
        'label3',
        'deadline3',

        'amount4',
        'label4',
        'deadline4',

        'amount5',
        'label5',
        'deadline5',

        'priceable',
    ];    

    public function event()
    {
        return $this->belongsTo(Event::class,'event_price','');
    }
}
