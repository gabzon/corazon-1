<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    public String $type;
    use WithPagination;

    public function mount(String $type = 'school')
    {
        $this->type = $type;
    }
    
    public function render()
    {
        $schools = Organization::where('type', $this->type)->inRandomOrder()->paginate(15);
        return view('livewire.organization.listing', [
            'schools' => $schools
        ]);
    }
}
