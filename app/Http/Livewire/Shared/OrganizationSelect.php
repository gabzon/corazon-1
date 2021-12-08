<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class OrganizationSelect extends Component
{
    public $selected;
    public int|null $city;
    public string $type;

    public function add()
    {   
        dd($this->selected);    
        if ($this->type == 'manager') {
            $this->emit('organizationToManage', $this->selected);
        }
        if ($this->type == 'instructor') {
            $this->emit('organizationToInstruct', $this->selected);
        }         
        
    }

    public function mount($city = null, $type = 'instructor')
    {
        $this->city = $city;        
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.shared.organization-select');
    }
}


