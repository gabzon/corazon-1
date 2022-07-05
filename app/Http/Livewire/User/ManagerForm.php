<?php

namespace App\Http\Livewire\User;

use App\Models\Organization;
use App\Models\User;
use Livewire\Component;

class ManagerForm extends Component
{
    public User $user;
    public Organization|null $org = null;
    public $orgList;
    
    protected $listeners = ['selectedOrg' => 'matchOrg'];
    
    public function matchOrg(Organization $org)
    {
        $this->org = $org;
    }

    public function addOrgToManage()
    {
        if ($this->org == null) {
            session()->flash('warning','Please select organization from the list!');
            return;
        }
        if ($this->user->manageOrganization($this->org->id)) {
            session()->flash('warning','This user already manages this organization!');
            return;
        }

        $this->user->manages()->attach($this->org->id,['role'=>'manager']);
        session()->flash('success','User manager role added successfully!');
        $this->loadList();
        $this->emit('orgAddedToManagingList');
    }

    public function loadList()
    {        
         $user = User::with('manages')->findOrFail($this->user->id);
         $this->orgList = $user->manages;
        
    }

    public function remove($org)
    {        
        $this->user->manages()->detach($org);
        session()->flash('success', 'Organization removed from list of organization to manage');
        $this->loadList();
    }
    
    public function mount(User $user)
    {
        $this->user = $user;        
    }
    
    public function render()    
    {
        $this->loadList();
        return view('livewire.user.manager-form');
    }
}
