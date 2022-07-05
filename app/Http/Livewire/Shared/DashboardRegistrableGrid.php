<?php

namespace App\Http\Livewire\Shared;

use App\Models\Course;
use App\Models\Event;
use App\Models\Organization;
use Livewire\Component;

class DashboardRegistrableGrid extends Component
{
    public Organization $org;
    public string $model;
    public string $createPath;
    public string $showPath;
    public string $search = '';
    public $list;

    // public function updating($name, $value)
    // {
    //     $this->resetPage();
    // }

    public function mount(Organization $org, $model)
    {        
        $this->org = $org;
        $this->model = $model;                
    }

    public function render()
    {
        switch ($this->model) {
            case 'event':
                $this->list = Event::isActive()->byOrganization($this->org->id)->where('name','LIKE','%'. $this->search .'%')->get();                
                $this->createPath = 'event.create';
                $this->showPath = 'event.show';                
                break;            
            default:
                $this->collection = Course::where('organization_id', $this->org->id)->where('name','LIKE','%'. $this->search .'%')->get();
                $this->createPath = 'course.create';
                $this->showPath = 'course.show';
                break;
        }
        
        return view('livewire.shared.dashboard-registrable-grid', [
            'collection' => $this->list
        ]);
    }
}
