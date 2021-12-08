<?php

namespace App\Models;

use App\Contracts\Interestable;
use App\Contracts\Likeable;
use App\Models\Concerns\Interests;
use App\Models\Concerns\Likes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figure extends Model implements Likeable, Interestable
{
    use HasFactory;
    use Likes;
    use Interests;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'video',
        'thumbnail',
        'difficulty',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
