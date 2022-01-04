<?php

namespace App\Http\Livewire\Shared;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RegisteredTable extends Component
{    
    use WithPagination;
    public $inscribed;
    public $model;
    public string $status;
    public string $role;
    public bool $showForm = false;
    public User $user;
    
    public function mount($model)
    {
        $this->model = $model;        
        $this->inscribed = $model->registrations;
    }

    public function save()
    {
        //dd([ 'status' => $this->status, 'role' => $this->status, 'username' => $this->user->username] );
        $this->user->courseRegistrations()->updateExistingPivot($this->model->id, ['status'=> $this->status, 'role'=> $this->role]);
        $this->showForm = false;
        return redirect()->route('course.students', $this->model);
    }

    public function update(User $user)
    {
        $this->user = $user;
        if (get_class($this->model) == "App\Models\Event") {
            $this->status = $user->getEventRegistrationStatus($this->model);
        }   
        if (get_class($this->model) == "App\Models\Course") {
            $this->status = $user->getCourseRegistrationStatus($this->model);
        } 

        $this->role = $user->getEventRegistrationRole($this->model);
        $this->showForm = true;
    }

    public function cancel()
    {
        $this->showForm = 'false';
    }

    public function render()
    {
        return view('livewire.shared.registered-table');
    }
}
