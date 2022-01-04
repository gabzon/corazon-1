<?php

namespace App\Traits;

use App\Models\Course;
use App\Models\Event;

trait UserBookmarksTrait {

    public function bookmarkedCourses()
    {
        return $this->belongsToMany(Course::class,'bookmark_course','user_id','course_id')->withTimeStamps();
    }

    public function bookmarkedEvents()
    {
        return $this->belongsToMany(Event::class,'bookmark_event','user_id','event_id')->withTimeStamps();
    }

    public function hasBookmarkedCourse(Course $course):bool
    {
        if (! $course->exists) { return false; }
        return in_array($course->id, $this->bookmarkedCourses()->pluck('course_id')->toArray());        
    }

    public function hasBookmarkedEvent(Event $event):bool
    {
        if (! $event->exists) { return false; }
        return in_array($event->id, $this->bookmarkedEvents()->pluck('event_id')->toArray());
    }

    public function bookmarkCourse(Course $course): self
    {        
        if ($this->hasBookmarkedCourse($course)) { return $this; }
        $course->bookmarks()->attach($this->id);
        return $this;
    }

    public function bookmarkEvent(Event $event): self
    {
        if ($this->hasBookmarkedEvent($event)) { return $this; }
        $event->bookmarks()->attach($this->id);        
        return $this;
    }

    public function unbookmarkCourse(Course $course): self
    {
        if (! $this->hasBookmarkedCourse($course)) { return $this; }
        $course->bookmarks()->detach($this->id);        
        return $this;
    }

    public function unbookmarkEvent(Event $event): self
    {
        if (! $this->hasBookmarkedEvent($event)) { return $this; }
        $event->bookmarks()->detach($this->id);        
        return $this;
    }

    public function numberOfBookmarks():int
    {
        return count($this->bookmarkedCourses) + count($this->bookmarkedEvents);
    }

    public function bookmarksCount():string
    {        
        return trans_choice(
                '{0} no bookmarks|{1} :count bookmark|[2,*] :count bookmarks',
                $this->numberOfBookmarks(), ['count' =>
                $this->numberOfBookmarks()]);
    }

}
