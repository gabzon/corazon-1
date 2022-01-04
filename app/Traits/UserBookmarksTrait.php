<?php

namespace App\Traits;

use App\Contracts\Bookmarkable;
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

    public function hasBookmarked(Bookmarkable $bookmarkable):bool
    {
        if (! $bookmarkable->exists) {
            return false;
        }
        return in_array($this->id, $bookmarkable->bookmarks()->pluck('user_id')->toArray());     
    }

    public function bookmark(Bookmarkable $bookmarkable): self
    {        
        if ($this->hasBookmarked($bookmarkable)) {
            return $this;
        }

        $bookmarkable->bookmarks()->attach($this->id);

        return $this;
    }

    public function unbookmark(Bookmarkable $bookmarkable): self
    {
        if (! $this->hasBookmarked($bookmarkable)) { return $this; }
        $bookmarkable->bookmarks()->detach($this->id);        
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
