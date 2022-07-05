<?php

namespace App\Http\Livewire\Shared\Combobox;

use App\Models\Style;
use Livewire\Component;

class Styles extends Component
{
    public String $label;
    public String $search = '';
    public Style|null $estilo;
    public $showDropdown = false;
    public bool $showLabel;

    protected $listeners = ['resetSchoolList' => 'resetSearch'];    

    public function resetSearch()
    {
        $this->search = '';
        $this->estilo = null;        
    }

    public function selectStyle(Style $item)
    {
        $this->estilo = $item;        
        $this->search = $item->name;
        $this->showDropdown = false;
        $this->emit('selectedStyle', $this->estilo);
    }

    public function mount(String $label = 'Styles', $showLabel = true)
    {
        $this->label = $label;
        $this->showLabel = $showLabel;
    }

    public function render()
    {
        return view('livewire.shared.combobox.styles', [
            'collection' => Style::where('name','LIKE','%'. $this->search .'%')->orderBy('name','asc')->get()
        ]);
    }
}
