<?php

namespace App\Traits;

use App\Contracts\Registrable;
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

    public function isRegistered(Registrable $registrable):bool
    {
        if (! $registrable->exists) {
            return false;
        }
        // return in_array($this->id, $registrable->registrations()->pluck('user_id')->toArray());    
        return $registrable->registrations()->where('user_id', $this->id)->exists();       
    }

    public function register(Registrable $registrable): self
    {        
        if ($this->isRegistered($registrable)) {
            return $this;
        }

        $registrable->registrations()->attach($this->id);

        return $this;
    }

    public function unregister(Registrable $registrable): self
    {
        if (! $this->isRegistered($registrable)) { return $this; }
        $registrable->registrations()->detach($this->id);        
        return $this;
    }
    
    public function getRegistrationRole(Registrable $registrable)
    {        
        if (! $registrable->exists ) {            
            return;
        }
        return $registrable->registrations()->where('user_id',$this->id)->first()->pivot->role;
    }

    public function getRegistrationStatus(Registrable $registrable)
    {
        if (! $registrable->exists) {
            return false;
        }

        return $registrable->registrations()->where('user_id',$this->id)->first()->pivot->status;
    }

    public function registrationIs(Registrable $registrable, $status):bool
    {
        if (! $registrable->exists) {
            return false;
        }

        if (! $this->isRegistered($registrable)) {
            return false;
        }

        return $registrable->registrations()->where('user_id',$this->id)->first()->pivot->status === $status;
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