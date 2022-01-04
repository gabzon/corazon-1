<?php

namespace App\Traits;

use App\Contracts\Likeable;
use App\Models\Course;
use App\Models\Event;

trait UserLikesTrait {

    public function likedCourses()
    {        
        return $this->belongsToMany(Course::class,'course_like','user_id','course_id')->withTimeStamps();
    }

    public function likedEvents()
    {        
        return $this->belongsToMany(Event::class,'event_like','user_id','event_id')->withTimeStamps();
    }
    
    public function like(Likeable $likeable): self
    {        
        if ($this->hasLiked($likeable)) {
            return $this;
        }

        $likeable->likes()->attach($this->id);

        return $this;
    }

    public function unlike(Likeable $likeable): self
    {
        if (! $this->hasLiked($likeable)) { return $this; }
        $likeable->likes()->detach($this->id);        
        return $this;
    }

    public function hasLiked(Likeable $likeable):bool
    {
        if (! $likeable->exists) {
            return false;
        }
        return in_array($this->id, $likeable->likes()->pluck('user_id')->toArray());     
    }
    
    public function numberOfLikes():int
    {
        return count($this->likedCourses) + count($this->likedEvents);
    }

    public function likesCount():string
    {        
        return trans_choice(
                '{0} no likes|{1} :count like|[2,*] :count likes',
                $this->numberOfLikes(), ['count' =>
                $this->numberOfLikes()]);
    }
}
