<?php

namespace App\Http\Livewire\Organization\Form;

use App\Models\Organization;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Team extends Component
{
    public $team = [];    
    public User|null $user = null;
    public Organization $org;

    protected $listeners = ['userSelected' => 'addTeamMember'];

    public function save()
    {
                    
    }

    public function addTeamMember(User $user)
    {                                    
        $this->user = $user;
        
        if (!$this->org->isTeamMember($this->user->id)) {
            $this->org->team()->attach($this->user->id,['role'=>'team']);   
            session()->flash('success','Team member added successfully!');
        }else{            
            session()->flash('warning','This user already teaches in this organization!');
        }           
        
        $this->loadList();         
    }

    public function loadList()
    {        
        $organization = Organization::with(['team'])->findOrFail($this->org->id);        
        $this->team = $organization->team;
    }

    public function remove($user)
    {               
        $this->org->team()->detach($user);
        session()->flash('success', 'Team member removed from this Organization');

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