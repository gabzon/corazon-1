<?php

namespace App\Http\Livewire\Shared;

use App\Models\Organization;
use App\Models\User;
use Livewire\Component;

class Combobox extends Component
{
    public $collection;
    public $itemId;
    public $showDropdown = false;
    public $search;
    public String $label;

    public function selectItem($id)
    {
        $this->itemId = $id;
        dd($this->itemId);
        $this->showDropdown = false;
    }

    public function mount(String $model)
    {        
        switch ($model) {
            case 'organization':
                $this->collection = Organization::all();
                break;
            
            default:
                $this->collection = User::all();
                break;
        }
    }

    public function render()
    {
        return view('livewire.shared.combobox');
    }
}
