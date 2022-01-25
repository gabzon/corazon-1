<?php

namespace App\Services;

use App\Contracts\Registrable;
use App\Models\User;
use Illuminate\Support\Str;

class RegistrationService 
{
    public User $user;
    public Registrable $registrable;
    public string $status = 'pre-registered';
    public int|null $limit = null;
    public bool $isCourse = True;
    
    public function __construct(User $user, Registrable $registrable)
    {
        $this->user = $user;
        $this->registrable = $registrable;
        $this->isCourse = class_basename($this->registrable) == 'Course';
        $this->status = $this->defaultRegistrationStatus($registrable);
        $this->limit = $this->getRegistrableLimit($registrable);
    }

    public function register()
    {    
        $this->isUserRegisteredInOrganization();
        
        if ($this->status != 'pre-registered') {
            $this->registrable->registrations()->attach($this->user->id, ['status'=> $this->status ]);
        } else {
            
            if ($this->hasReachedLimit($this->registrable)) {
                $this->status = 'waiting';
            };
            
            if ($this->isCourse){
                if ( !$this->isParityOk($this->registrable) ) {
                    $this->status = 'waiting';
                }            
            }             
            $this->registrable->registrations()->attach($this->user->id, ['status'=> $this->status ]);
        }        
    }

    public function isUserRegisteredInOrganization()
    {
        if ($this->isCourse) {
            if ( !$this->registrable->organization->hasStudent(auth()->user()->id) ) {
                $this->registrable->organization->students()->attach(auth()->user()->id); 
            }
        } else {
            foreach ($this->registrable->organizations as $org) {
                if ( !$org->hasStudent(auth()->user()->id) ) {
                    $org->students()->attach(auth()->user()->id);                    
                }                
            }
        }
    }
    
    public function defaultRegistrationStatus(Registrable $registrable): string
    {
        if ($registrable->default_registration_status == 'standby') {
            return 'standby';
        }
        
        if ($registrable->default_registration_status == 'registered') {
            return 'registered';
        }

        return $registrable->default_registration_status;
    }

    public function getRegistrableLimit(Registrable $registrable)
    {
        if ($registrable->limit_attendees) {
            return $registrable->limit_attendees;
        }

        if ($this->isCourse) {            
            if ($registrable->focus == 'partnerwork') {                
                return $registrable->space->limit_couples ?? $registrable->space->capacity;
            }
            return $registrable->space->capacity;
        }

        return null;
    }

    public function hasReachedLimit(Registrable $registrable):bool
    {        
        if ($this->limit) {
            if ($registrable->registrations->count() >= $this->limit) {
                return true;
            }
        }
        return false;
    }    

    public function isParityOk(Registrable $registrable):bool
    {
        if ($registrable->focus == 'partnerwork') {
            if ($registrable->registrations->count() >= ($this->limit + 5)) {
                return false;
            }
        }
        return true;
    }
}
