<?php

namespace App\Traits;

use App\Contracts\Favoriteable;
use App\Models\Course;
use App\Models\Event;
use App\Models\Lesson;
use App\Models\Organization;

trait UserFavoritesTrait {

    public function favoritesCourses()
    {        
        return $this->belongsToMany(Course::class,'course_favorite','user_id','course_id')->withTimeStamps();
    }

    public function favoritesEvents()
    {        
        return $this->belongsToMany(Event::class,'event_favorite','user_id','event_id')->withTimeStamps();
    }

    public function favoritesLessons()
    {        
        return $this->belongsToMany(Lesson::class,'favorite_lesson','user_id','lesson_id')->withTimeStamps();        
    }

    public function favoritesOrganizations()
    {
        return $this->belongsToMany(Organization::class,'favorite_organization','user_id','organization_id')->withTimeStamps();
    }
    
    public function favorite(Favoriteable $favoriteable): self
    {        
        if ($this->hasFavorited($favoriteable)) {
            return $this;
        }

        $favoriteable->favorites()->attach($this->id);

        return $this;
    }

    public function unfavorite(Favoriteable $favoriteable): self
    {
        if (! $this->hasFavorited($favoriteable)) { return $this; }
        $favoriteable->favorites()->detach($this->id);        
        return $this;
    }

    public function hasFavorited(Favoriteable $favoriteable):bool
    {
        if (! $favoriteable->exists) {
            return false;
        }
        return in_array($this->id, $favoriteable->favorites()->pluck('user_id')->toArray());     
    }
    
    public function numberOfFavorites():int
    {
        return count($this->favoritesCourses) + count($this->favoritesEvents) + count($this->favoritesLessons) + count($this->favoritesOrganizations);
    }

    public function favoritesCount():string
    {        
        return trans_choice(
                '{0} no favorites|{1} :count favorite|[2,*] :count favorites',
                $this->numberOfFavorites(), ['count' =>
                $this->numberOfFavorites()]);
    }
}
