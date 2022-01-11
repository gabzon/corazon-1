<?php

namespace App\Http\Livewire\Shared;

use App\Models\CourseRegistration;
use Livewire\Component;
use Livewire\WithPagination;

class RegisteredTable extends Component
{    
    use WithPagination;    
    public $model;
    public string $status;
    public string $role;
    public bool $showForm = false;
    public CourseRegistration $cr;
    
    public function mount($model, $query = null)
    {
        $this->model = $model;
        $this->query = $query;
    }

    public function save()
    {
        //dd([ 'status' => $this->status, 'role' => $this->status, 'username' => $this->user->username] );
        // $this->user->courseRegistrations()
        // $this->model->registrations()->updateExistingPivot($this->user->id, ['status'=> $this->status, 'role'=> $this->role]);
        $this->cr->status = $this->status;
        $this->cr->role = $this->role;
        $this->cr->save();
        $this->showForm = false;
        return redirect()->route('course.students', $this->model);
    }

    public function update(CourseRegistration $cr)
    {        
        $this->cr = $cr;
        $this->status = $cr->status;
        $this->role = $cr->role; 
        $this->showForm = true;        
    }

    public function cancel()
    {
        $this->showForm = 'false';
    }

    public function render()
    {
        if ($this->query == 'students') {                        
            $inscribed =  CourseRegistration::where('course_id', $this->model->id);                        
        }else{
            $inscribed = $this->model->registrations;
        }  
        return view('livewire.shared.registered-table', [
            'inscribed' => $inscribed->paginate(10),
        ]);
    }
}
