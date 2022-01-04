<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
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
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date:Y-m-d',
        'user_id' => 'integer',
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
 
}
