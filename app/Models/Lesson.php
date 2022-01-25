<?php

namespace App\Models;

use App\Contracts\Favoriteable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model implements Favoriteable
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'date',
        'description',
        'comments',
        'user_id',
        'course_id',
        'organization_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'        => 'integer',
        'date'      => 'date:Y-m-d',
        'user_id'   => 'integer',
        'course_id' => 'integer',
        'organization_id'   => 'integer',
    ];


    public function author()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class)->withTimestamps();
    }

    public function favorites(): BelongsToMany
    {        
        return $this->belongsToMany(User::class,'favorite_lesson','lesson_id','user_id')->withTimeStamps();        
    }
 
}
