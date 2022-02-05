<?php

namespace App\Http\Livewire\Shared;

use App\Models\CourseRegistration;
use App\Models\EventRegistration;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RegisteredTable extends Component
{    
    use WithPagination;    
    public $model;
    public User $user;
    public string $basename;
    public string $status;
    public string $role;
    public string $comments;
    public bool $showForm = false;
    public $reg;
    public $search = '';

    protected $listeners = ['instructorToOrganization' => 'addInvitee', 'userSelected' => 'addInvitee'];

    public function addInvitee(User $user)
    {        
        if (! $user->exists) {
            return;
        }

        if ( !$this->model->isRegistered($user->id, 'invitee') ) {            
            $this->model->registrations()->attach($user->id, ['status'=>'invitee']);
            session()->flash('success','User invited successfully!');
        }else{
            session()->flash('warning','User was already invited!');
        }
    }  


    public function mount($model, $query = null)
    {
        $this->model = $model;
        $this->query = $query;
        $this->basename = class_basename($this->model);
    }

    public function save()
    {
        //dd([ 'status' => $this->status, 'role' => $this->status, 'username' => $this->user->username] );
        // $this->user->courseRegistrations()
        // $this->model->registrations()->updateExistingPivot($this->user->id, ['status'=> $this->status, 'role'=> $this->role]);
        $this->reg->status = $this->status;
        $this->reg->role = $this->role;
        $this->reg->comments = $this->comments;
        $this->reg->save();
        $this->showForm = false;
        return redirect(request()->header('Referer'));
    }

    public function update($reg)
    {                
        if ($this->basename == 'Event') {            
            $this->reg = EventRegistration::findOrFail($reg['id']);
        }else{
            $this->reg = CourseRegistration::findOrFail($reg['id']);
        }
                
        $this->user = User::findOrFail($reg['user_id']);
        $this->status = $this->reg->status;
        $this->role = $this->reg->role; 
        $this->comments = $this->reg->comments ?? '';
        $this->showForm = true;
    }

    public function cancel()
    {
        $this->showForm = 'false';
    }

    public function render()
    {
        if ($this->basename == 'Event') {
            $inscribed = EventRegistration::with('user')->where('event_id', $this->model->id);
        } else {
            $inscribed = CourseRegistration::with('user')->where('course_id', $this->model->id);    
        }                
                
        return view('livewire.shared.registered-table', [
            'inscribed' => $inscribed->paginate(20),
        ]);
    }
}
