<?php

namespace App\Http\Livewire\Event;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RegistrationPerClassTable extends Component
{
    use WithPagination;    

    public Event $event;
    public User $user;
    public $status;
    public $role;
    public $gender;
    public string $comments;
    public bool $showForm = false;
    public bool $showUser = false;
    public $reg;
    public $search;

    protected $listeners = ['instructorToOrganization' => 'addInvitee', 'userSelected' => 'addInvitee', 'registrationUpdated' => 'yeah'];

    public function yeah($value)
    {
        $this->showForm = false;
    }

    public function addInvitee(User $user)
    {        
        if (! $user->exists) {
            return;
        }

        // if ( !$this->event->isRegistered($user->id, 'invitee') ) {            
        //     $this->event->registrations()->attach($user->id, ['status'=>'invitee']);
        //     session()->flash('success','User invited successfully!');
        // }else{
        //     session()->flash('warning','User was already invited!');
        // }
    } 

    public function view(User $user)
    {        
        $this->user = $user;        
        $this->showUser = true;
    }

    public function save()
    {        
        $this->reg->status = $this->status;
        $this->reg->role = $this->role;
        $this->reg->comments = $this->comments;
        $this->reg->save();
        $this->showForm = false;
        return redirect(request()->header('Referer'));
    }

    public function updateEventRegistration(EventRegistration $reg)
    {                                        
        $this->reg = EventRegistration::with(['user','event'])->findOrFail($reg->id);                
        $this->user = User::findOrFail($reg->user_id);
        // $this->status = $this->reg->status;
        // $this->role = $this->reg->role; 
        // $this->comments = $this->reg->comments ?? '';
        $this->showForm = true;
        $this->showUser = false;
    }

    public function updateClassRegistration(Course $course, User $user)
    {        
        
        $this->reg = CourseRegistration::where('course_id', $course->id)->where('user_id', $user->id)->first();
        $this->user = $user;
        $this->showForm = true;
        $this->showUser = false;
    }

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function cancel()
    {
        $this->showForm = 'false';
    }

    public function render()
    {        
        
        $registrations = EventRegistration::with(['user', 'event.courses'])
                                            ->where('event_id', $this->event->id)
                                            ->byUser($this->search)
                                            ->byStatus($this->status)
                                            ->byRole($this->role)
                                            ->byGender($this->gender);     

        return view('livewire.event.registration-per-class-table', [
            'registrations' => $registrations->paginate(20),
        ]);
    }
}

