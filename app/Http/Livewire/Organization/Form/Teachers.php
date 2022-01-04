<?php

namespace App\Http\Livewire\Organization\Form;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class Teachers extends Component
{
    public $instructors = [];
    public Organization $org;

    protected $listeners = ['instructorToOrganization' => 'addInstructor'];

    public function addInstructor(User $instructor)
    {                            
        if (!$this->org->hasTeacher($instructor->id)) {
            $this->org->teachers()->attach($instructor->id,['role'=>'instructor']);
            session()->flash('success','User manager role added successfully!');
            $this->loadList();
        }else{            
            session()->flash('warning','This user already teaches in this organization!');
        }                        
    }

    public function loadList()
    {        
        $organization = Organization::with('teachers')->findOrFail($this->org->id);
        $this->instructors = $organization->teachers;
    }

    public function remove($instructor)
    {        
        $this->org->teachers()->detach($instructor);
        session()->flash('success', 'Organization removed from list of organization to manage');
        $this->loadList();
    }

    public function mount(Organization $organization)
    {
        $this->org = $organization;
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.organization.form.teachers');
    }
}








