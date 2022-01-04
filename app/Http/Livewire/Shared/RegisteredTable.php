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
        // $this->user->courseRegistrations()
        $this->model->registrations()->updateExistingPivot($this->user->id, ['status'=> $this->status, 'role'=> $this->role]);
        $this->showForm = false;
        return redirect()->route('course.students', $this->model);
    }

    public function update(User $user)
    {
        $this->user = $user;

        $this->status = $user->getRegistrationStatus($this->model);
        $this->role = $user->getRegistrationRole($this->model);

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
