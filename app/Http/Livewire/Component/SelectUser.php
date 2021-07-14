<?php

namespace App\Http\Livewire\Component;

use App\Models\User;
use Livewire\Component;

class SelectUser extends Component
{
    public $options;
    public $user;

    public function addUserToList()
    {                
        $this->emit('instructorAdded', $this->user + 1);
    }

    public function mount($label = null)
    {
        $this->options = User::all();
        $this->options = $this->options->map(function($item, $key){
                return [
                    'id'    => $item->id,
                    'name'  => $item->name,
                    'avatar'=> $item->profile_photo_url,
                ];
            }
        ); 
    }

    public function render()
    { 
        return view('livewire.component.select-user', ['users' => json_encode($this->options, JSON_FORCE_OBJECT)]);
    }
}
