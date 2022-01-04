<?php

namespace App\Http\Livewire\Event;

use App\Http\Livewire\Traits\WithThumbnail;
use App\Models\Event;
use App\Services\FBImportService;
use Illuminate\Support\Str;
use Livewire\Component;

class DefaultForm extends Component
{    
    use WithThumbnail;
    public Event $event;
    public $styles;

    protected $listeners = ['selectedStyles' => 'updateStyles', 'thumbnail' => 'updateThumbnail'];

    public $thumbnail;

    protected $rules = [
        'event.name'            => 'required|string|max:100',
        'event.slug'            => 'required',
        'event.start_date'      => 'required|date|after:today',        
        'event.end_date'        => 'required|date|after_or_equal:event.start_date',        
        'event.type'            => 'required',
        'event.status'          => 'required',
        'event.user_id'         => 'nullable',
        'event.location_id'     => 'nullable',
        'event.city_id'         => 'required',
        'event.facebook_id'     => 'nullable',
        'event.description'     => 'nullable',
    ];

    public function updatedEventStartDate()
    {
        if (! $this->event->end_date) {
            $this->event->end_date = $this->event->start_date;
        }
    }  

    public function updateStyles($styles)
    {
        $this->styles = $styles;
    }

    public function reimport()
    {
        
        $fbImport = new FBImportService($this->event->facebook_id);                     
                        
        $fbImport->matchImport($this->event);            
        
        if ($fbImport->hasCover) {                        
            $this->thumbnail = $fbImport->graphNode->getField('cover')['source'];             
        }
    }

    public function save()
    {           
        $this->validate();
        
        $this->event->user_id = auth()->user()->id;

        if ($this->styles) {            
            $this->event->styles()->sync($this->styles);
        }
        
        if ($this->thumbnail) {
            $this->handleThumbnailUpload($this->event, $this->thumbnail);
        }

        $this->event->save();



        session()->flash('success', 'Event saved successfully.');        
    }

    public function updatedEventName()
    {
        $this->event->slug = Str::slug($this->event->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;        
    }

    public function mount($event)
    {
        if ($event->exists) {
            $this->event = $event;            
        }  
    }

    public function render()
    {
        return view('livewire.event.default-form');
    }
}


