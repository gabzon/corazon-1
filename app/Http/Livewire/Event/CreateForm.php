<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Services\FBImportService;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Http\Livewire\Traits\WithThumbnail;
use App\Models\Organization;

class CreateForm extends Component
{
    use WithThumbnail;
    public Event $event;
    
    protected $listeners = ['thumbnail' => 'updateThumbnail'];

    public $thumbnail;
    public Organization $org;
    public array $fbResults = [];

    protected $rules = [
        'event.name'            => 'required|string|max:100',
        'event.slug'            => 'required',
        'event.start_date'      => 'required|date|after:today',        
        'event.end_date'        => 'required|date|after:event.start_date',
        'event.type'            => 'required',
        'event.status'          => 'required',
        'event.description'     => 'nullable',
        'event.is_online'       => 'nullable',
        'event.facebook'        => 'nullable',
        'event.facebook_id'     => 'nullable',
        'event.user_id'         => 'nullable',
        'event.location_id'     => 'nullable',
        'event.city_id'         => 'required',
    ];

    public function updatedEventStartDate()
    {
        if (! $this->event->end_date) {
            $this->event->end_date = $this->event->start_date;
        }
    }    

    public function import()    
    {        
        $fbId = Str::after($this->event->facebook, 'https://www.facebook.com/events/');                
        
        $this->event->facebook_id = $fbId;

        $fbImport = new FBImportService($this->event->facebook_id);             
        
        
        // $this->fbResults = $fbImport->getFBNode();
                
        $fbImport->matchImport($this->event);            
        
        if ($fbImport->hasCover) {                        
            $this->thumbnail = $fbImport->graphNode->getField('cover')['source'];             
        }        
    }

    public function save()
    {   
        // dd('saving');
        $this->validate();
        
        $this->event->user_id = auth()->user()->id;

        $this->event->save();

        if ($this->thumbnail) {
            $this->handleThumbnailUpload($this->event, $this->thumbnail);
        }

        if (isset($this->org)) {
            $this->event->organizations()->sync($this->org->id);
        }

        session()->flash('success', 'Event created successfully.');

        return redirect(route('event.edit', $this->event));
    }

    public function updatedEventName()
    {
        $this->event->slug = Str::slug($this->event->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;        
    }

    public function mount($orgId = null)
    {
        $this->event = new Event;
        $this->event->type = '';
        $this->event->status = '';
        $this->event->location_id = null;    
        if ($orgId != null) {
            $this->org = Organization::find($orgId);
            $this->event->city_id = $this->org->city_id;            
        }
    }
    
    public function render()
    {
        return view('livewire.event.create-form');
    }
}
