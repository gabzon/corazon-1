<?php

namespace App\Http\Livewire\Shared\Combobox;

use App\Models\Organization;
use Livewire\Component;

class Organizations extends Component
{
    public String $label;
    public String $search = '';
    public Organization|null $org;
    public $showDropdown = false;
    public bool $showLabel;

    protected $listeners = ['orgAddedToManagingList' => 'resetSearch'];
    
    public function resetSearch()
    {
        $this->search = '';
        $this->org = null;
    }


    public function selectOrg(Organization $item)
    {
        $this->org = $item;        
        $this->search = $item->name;
        $this->showDropdown = false;
        $this->emit('selectedOrg', $this->org);
    }

    public function mount(String $label = 'Organizations', $showLabel = true)
    {
        $this->label = $label;
        $this->showLabel = $showLabel;
    }

    public function render()
    {
        return view('livewire.shared.combobox.organizations',[
            'collection' => Organization::where('name','LIKE','%'. $this->search .'%')->orderBy('name','asc')->get()
        ]);
    }
}
