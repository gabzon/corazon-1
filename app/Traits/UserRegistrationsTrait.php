<?php

namespace App\Traits;

use App\Models\Course;
use App\Models\Event;

trait UserRegistrationsTrait {    

    public function courseRegistrations()
    {
        return $this->belongsToMany(Course::class,'course_registrations','user_id','course_id')->withPivot(['status','role','option'])->withTimestamps();
    }

    public function eventRegistrations()
    {
        return $this->belongsToMany(Event::class, 'event_registrations','user_id','event_id')->withPivot(['status','role','option'])->withTimestamps();
    }

    public function isRegisteredInCourse(Course $course): bool
    {                
        if (! $course->exists ) { return false; }        
        return $course->registrations()->where('user_id', $this->id)->exists();        
    }

    public function isRegisteredInEvent($event): bool
    {                
        if (! $event->exists ) { return false; }        
        return $event->registrations()->where('user_id', $this->id)->exists();        
    }

    public function registerCourse(Course $course): self
    {
        if ($this->isRegisteredInCourse($course)) { return $this; }
        $course->registrations()->attach($this->id);        
        return $this;
    }

    public function registerEvent(Event $event): self
    {
        if ($this->isRegisteredInEvent($event)) { return $this; }
        $event->registrations()->attach($this->id);        
        return $this;
    }
    
    public function getEventRegistrationRole($event)
    {        
        if (! $event->exists ) {            
            return;
        }
        return $event->registrations()->where('user_id',$this->id)->first()->pivot->role;
    }

    public function getCourseRegistrationStatus(Course $course)
    {
        if (! $course->exists) {
            return false;
        }

        return $course->registrations()->where('user_id',$this->id)->first()->pivot->status;
    }

    public function getEventRegistrationStatus($event)
    {
        if (! $event->exists) {
            return false;
        }

        return $event->registrations()->where('user_id',$this->id)->first()->pivot->status;
    }

    public function numberOfRegistrations():int
    {
        return count($this->courseRegistrations) + count($this->eventRegistrations);
    }

    public function registrationsCount():string
    {        
        return trans_choice(
                '{0} no registrations|{1} :count registration|[2,*] :count registrations',
                $this->numberOfRegistrations(), ['count' =>
                $this->numberOfRegistrations()]);
    }
}


// public function registerForCourse(Course $course): self
// {
//     if ($this->isRegisteredInCourse($course)) { return $this; }

    

//     (new Registration(['role'=>'student', 'option' => $course->name ]))
//         ->user()->associate($this, ['role'=>'student'])
//         ->registrable()->associate($course)
//         ->save();
        
//     return $this;
// }

// public function unregisterFromCourse(Registrable $registrable):self
// {
//     if (! $this->isRegistered($registrable)) {
//         return $this;
//     }
//     $registrable->registrations()->whereHas('user', fn(Builder $query) => $query->whereId($this->id))->delete();
    
//     return $this;
// }