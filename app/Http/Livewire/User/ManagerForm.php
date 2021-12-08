<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class ManagerForm extends Component
{
    public User $user;
    public $orgList;
    
    protected $listeners = ['organizationToManage' => 'addManager'];

    public function addManager($org)
    {                           
        if (!$this->user->manageOrganization($org['id'])) {             
            $this->user->manages()->attach($org['id'],['role'=>'manager']);
            session()->flash('success','User manager role added successfully!');
            $this->loadList();
        }else{            
            session()->flash('warning','This user already manages this organization!');
        }                        
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
        $this->loadList();
    }
    
    public function render()
    {
        return view('livewire.user.manager-form');
    }
}
