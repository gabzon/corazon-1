<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use App\Models\OrganizationMembers;
use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;

class MembersTable extends Component
{   
    use WithPagination;
    public Organization $org;
    public $showUser = false;
    public User $user;
    public $search;
    public $role;
    public $gender;
    
    public function mount(Organization $organization)
    {
        $this->org = $organization; 
    }

    public function view(User $user)
    {        
        $this->user = $user;        
        $this->showUser = true;
    }

    public function render()
    {        
        return view('livewire.organization.members-table', [
            'members' => OrganizationMembers::with('user')
                        ->where('organization_id', $this->org->id)
                        ->byUser($this->search)
                        ->byGender($this->gender)
                        ->byRole($this->role)
                        ->paginate(10)        
        ]);
    }
}


