<?php

namespace App\Traits;

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

    public function likeCourse(Course $course): self
    {        
        if ($this->hasLikedCourse($course)) { return $this; }
        $course->likes()->attach($this->id);
        return $this;
    }

    public function likeEvent(Event $event): self
    {
        if ($this->hasLikedEvent($event)) { return $this; }
        $event->likes()->attach($this->id);        
        return $this;
    }

    public function unlikeCourse(Course $course): self
    {
        if (! $this->hasLikedCourse($course)) { return $this; }
        $course->likes()->detach($this->id);        
        return $this;
    }

    public function unlikeEvent(Event $event): self
    {
        if (! $this->hasLikedEvent($event)) { return $this; }
        $event->likes()->detach($this->id);        
        return $this;
    }

    public function hasLikedCourse(Course $course):bool
    {
        if (! $course->exists) { return false; }
        return in_array($course->id, $this->likedCourses()->pluck('course_id')->toArray());        
    }

    public function hasLikedEvent(Event $event):bool
    {
        if (! $event->exists) {
            return false;
        }
        return in_array($event->id, $this->likedEvents()->pluck('event_id')->toArray());        
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
