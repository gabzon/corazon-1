<?php

namespace App\Http\Livewire\Organization;

use App\Models\Organization;
use App\Models\OrganizationMembers;
use Livewire\Component;
use Livewire\WithPagination;

class MembersTable extends Component
{   
    use WithPagination;
    public Organization $org;
    
    public function mount(Organization $organization)
    {
        $this->org = $organization; 
    }

    public function render()
    {        
        return view('livewire.organization.members-table', [
            'members' => OrganizationMembers::with('user')->where('organization_id', $this->org->id)->paginate(10)        
        ]);
    }
}
