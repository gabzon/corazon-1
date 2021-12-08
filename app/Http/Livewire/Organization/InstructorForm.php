<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use Livewire\Component;

class InstructorForm extends Component
{
    public Organization $org;
    
    public $listOfInstructors;

    protected $listeners = ['instructorToOrganization' => 'addInstructor'];

    public function addInstructor($instructor)
    {        
        if (!$this->org->hasTeacher($instructor['id'])) {             
            $this->org->teachers()->attach($instructor['id'],['role'=>'instructor']);
            session()->flash('success','Instructor added successfully!');
            $this->loadList();
        }else{            
            session()->flash('warning','This user already manages this organization!');
        }  
    }

    public function loadList()
    {        
         $org = Organization::with('teachers')->findOrFail($this->org->id);
         $this->listOfInstructors = $org->teachers;
        
    }

    public function remove($instructor)
    {        
        $this->org->teachers()->detach($instructor);
        session()->flash('success', 'Teacher removed from list of instructors');
        $this->loadList();
    }

    public function mount(Organization $org)
    {
        $this->org = $org;
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.organization.instructor-form');
    }
}

