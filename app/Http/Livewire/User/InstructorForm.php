<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class InstructorForm extends Component
{
    public User $user;
    public $orgList;

    protected $listeners = ['organizationToInstruct' => 'addInstructor'];
    
    public function addInstructor($org)
    {                   
        if (!$this->user->teachInOrganization($org['id'])) {             
            $this->user->teaches()->attach($org['id'],['role'=>'instructor']);
            session()->flash('success','User manager role added successfully!');
            $this->loadList();
        }else{            
            session()->flash('warning','This user already manages this organization!');
        }                        
    }

    public function loadList()
    {        
         $user = User::with('teaches')->findOrFail($this->user->id);
         $this->orgList = $user->teaches;
        
    }

    public function remove($org)
    {        
        $this->user->teaches()->detach($org);
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
        return view('livewire.user.instructor-form');
    }
}



