<?php

namespace App\Http\Livewire\User;

use App\Models\Style;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RequiredData extends Component
{
    public User $user;
    public bool $hasUsername = false;
    public bool $hasMobile = false;
    public bool $hasBirthday = false;
    public bool $hasIdn = false;

    protected $rules = [
        'user.gender'   => 'required|string|max:8',
        'user.username' => 'required|string|min:3|max:30|alpha_dash|unique:users,username',
        'user.mobile'   => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',        
        'user.birthday' => 'required|date',
    ];

    public function save()
    {
        $this->validate();
        
        $this->user->save();

        return redirect()->route('dashboard');
    }

    public function mount(User $user)
    {
        $this->user = $user;
        
        if ($user->username != null) {            
            $this->hasUsername = true;
        }
        if ($user->mobile != null) {
            $this->hasMobile = true;
        }
        if ($user->birthday != null) {
            $this->hasUsername = true;
        }
        if ($user->idn != null) {
            $this->hasIdn = true;
        }
    }

    public function render()
    {
        return view('livewire.user.required-data');
    }
}
