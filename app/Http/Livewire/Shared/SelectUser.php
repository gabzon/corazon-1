<?php

namespace App\Http\Livewire\Shared;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SelectUser extends Component
{    
    public bool $showDropdown = false;
    public $search;
    public User|null $user = null;
    public $list;
    public $oids;


    public function selected(User $user)
    {
        $this->user = $user;
        $this->showDropdown = false;
    }

    public function select()
    {   
        if ($this->user == null) {            
            session()->flash('error','You must select an user from the list');
            return;
        }                     
        $this->emit('userSelected', $this->user);
        $this->showDropdown = false;
        $this->user = null;            
    }

    public function mount(array $oids = null)
    {
        $this->oids = $oids;
    }

    public function render()
    {
        $list = User::where(function($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('email','LIKE', '%' . $this->search . '%')
                    ->orWhere('username','LIKE', '%' . $this->search . '%');
            })->inOrganization($this->oids)
            ->get();
        

        return view('livewire.shared.select-user', [
            'listOfUsers' => $list
        ]);
    }
}
