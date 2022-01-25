<?php

namespace App\Http\Livewire\Organization\Form;

use App\Models\Organization;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Team extends Component
{
    public $team = [];
    public $roles = [];
    public User|null $user = null;
    public Organization $org;
    
    protected $rules = [        
        'roles' => 'required',
    ];

    protected $listeners = ['instructorToOrganization' => 'addInstructor'];

    public function save()
    {
        $this->validate();                
        if ($this->user != null) {            
            foreach ($this->roles as $role) {
                switch ($role) {
                    case 'instructor':
                        if (!$this->org->hasTeacher($this->user->id)) {
                            $this->org->teachers()->attach($this->user->id,['role'=>'instructor']);   
                            session()->flash('success','Team member added successfully with instructor role!');
                        }else{            
                            session()->flash('warning','This user already teaches in this organization!');
                        } 
                        break;
                    case 'organizer':
                        // dd($this->user->id);
                        if (!$this->org->hasOrganizer($this->user->id)) {
                            $this->org->organizers()->attach($this->user->id,['role'=>'organizer']);
                            session()->flash('success','Team member added successfully with organizer role!');
                        }else{            
                            session()->flash('warning','This user already organizes in this organization!');
                        } 
                        break;
                    case 'dj':
                        if (!$this->org->hasDj($this->user->id)) {
                            $this->org->djs()->attach($this->user->id,['role'=>'dj']);
                            session()->flash('success','Team member added successfully with DJ role!');
                        }else{            
                            session()->flash('warning','This user already teaches in this organization!');
                        } 
                        break;
                    case 'bouncer':
                        if (!$this->org->hasBouncer($this->user->id)) {
                            $this->org->bouncers()->attach($this->user->id,['role'=>'bouncer']);
                            session()->flash('success','Team member added successfully with bouncer role!');
                        }else{            
                            session()->flash('warning','This user is already a bouncher in this organization!');
                        } 
                        break;
                    case 'publisher':
                        if (!$this->org->hasPublisher($this->user->id)) {
                            $this->org->publishers()->attach($this->user->id,['role'=>'publisher']);
                            session()->flash('success','Team member added successfully with publisher role!');
                        }else{            
                            session()->flash('warning','This user already publishes in this organization!');
                        }
                        break;
                    case 'assistant':
                        if (!$this->org->hasAssistant($this->user->id)) {
                            $this->org->assistants()->attach($this->user->id,['role'=>'assistant']);
                            session()->flash('success','Team member added successfully with assistant role!');
                        }else{            
                            session()->flash('warning','This user already  in this organization!');
                        }
                        break;
                }
                
                $this->loadList(); 
                $this->roles = [];   
                $this->user = null;        
            }
        }else{
            session()->flash('warning','Please select a user');
        }

    }

    public function addInstructor(User $user)
    {                            
        $this->user = $user;
        $this->loadList();
    }

    public function loadList()
    {        
        $organization = Organization::with(['team'])->findOrFail($this->org->id);
        $this->team = $organization->team->unique();
    }

    public function remove($user, $role)
    {               
        switch ($role) {
            case 'instructor':
                $this->org->teachers()->detach($user);
                session()->flash('success', 'Instructor role removed from this user');
                break;
            case 'organizer':
                $this->org->organizers()->detach($user);
                session()->flash('success', 'Instructor role removed from this user');
                break;
            case 'dj':
                $this->org->djs()->detach($user);
                session()->flash('success', 'DJ role removed from this user');
                break;
            case 'bouncer':
                $this->org->bouncers()->detach($user);
                session()->flash('success', 'Bouncer role removed from this user');
                break;
            case 'publisher':
                $this->org->publishers()->detach($user);
                session()->flash('success', 'Publisher role removed from this user');
                break;            
            default:
                $this->org->assistants()->detach($user);
                session()->flash('success', 'Assistant role removed from this user');
                break;
        }
        
        $this->loadList();
    }

    public function mount(Organization $organization)
    {
        $this->org = $organization;
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.organization.form.team');
    }
}