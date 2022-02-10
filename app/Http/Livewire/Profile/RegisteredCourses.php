<?php

namespace App\Http\Livewire\Profile;

use App\Models\CourseRegistration;
use App\Models\Organization;
use App\Models\User;
use Livewire\Component;

class RegisteredCourses extends Component
{
    public User $user;
    public Organization $org;

    public function mount(User $user, Organization $org)
    {
        $this->user = $user;
        $this->org = $org;
    }

    public function render()
    {
        $courses = CourseRegistration::with('user', 'course')->where('user_id', $this->user->id)->get();
        return view('livewire.profile.registered-courses',[
            'courses' => $courses
        ]);
    }
}
