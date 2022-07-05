<?php

namespace App\Http\Livewire\Shared;

use App\Models\Course;
use App\Models\Event;
use App\Models\Organization;
use Livewire\Component;
use Livewire\WithPagination;

class DashboardRegistrableList extends Component
{
    use WithPagination;

    public Organization $org;
    public string $model;
    public string $createPath;
    public string $showPath;
    public string $search = '';
    protected $list;

    public function mount(Organization $org, $model)
    {        
        $this->org = $org;
        $this->model = $model;                
    }
    
    public function render()
    {                
        switch ($this->model) {
            case 'event':
                $this->list = Event::byOrganization($this->org->id)->where('name','LIKE','%'. $this->search .'%')->where('status','!=','active')->paginate(10);                
                $this->createPath = 'event.create';
                $this->showPath = 'event.show';                
                break;            
            default:
                $this->list = Course::where('organization_id', $this->org->id)->where('name','LIKE','%'. $this->search .'%')->where('status','!=','active')->paginate(10);
                $this->createPath = 'course.create';
                $this->showPath = 'course.show';
                break;
        }
        return view('livewire.shared.dashboard-registrable-list', [
            'collection' => $this->list
        ]);
    }
}
