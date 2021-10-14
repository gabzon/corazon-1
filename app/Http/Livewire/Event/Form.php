<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Http\Livewire\Traits\WithThumbnail;
use App\Services\FBImportService;

class Form extends Component
{
    use WithThumbnail;

    public Event $event;    
    public string $action = 'store';

    protected $listeners = ['thumbnail' => 'updateThumbnail', 'selectedStyles' => 'updateStyles', 'selectedOrganizations' => 'updateOrganizations'];

    public $thumbnail;
    public $styles;
    public $organizations;
    public array $fbResults;

    protected function rules()
    {
        return [
            'event.name'            => 'required',
            'event.slug'            => 'required',
            'event.tagline'         => 'nullable',
            'event.description'     => 'nullable',
            'event.start_date'      => 'required|date',
            'event.end_date'        => 'required|date',
            'event.start_time'      => 'required',
            'event.end_time'        => 'required',
            'event.video'           => 'nullable',
            'event.thumbnail'       => 'nullable',
            'event.type'            => 'required',
            'event.status'          => 'required',
            'event.publish_at'      => 'nullable|date',
            'event.contact'         => 'nullable',
            'event.email'           => 'nullable',
            'event.phone'           => 'nullable',
            'event.website'         => 'nullable',
            'event.facebook'        => 'nullable|unique:events,facebook',
            'event.facebook_id'     => 'nullable|unique:events,facebook_id,'.$this->event->id,            
            'event.twitter'         => 'nullable|unique:events,twitter',
            'event.instagram'       => 'nullable|unique:events,instagram',
            'event.youtube'         => 'nullable|unique:events,youtube',
            'event.tiktok'          => 'nullable|unique:events,tiktok ',
            'event.user_id'         => 'nullable',
            'event.location_id'     => 'nullable',
            'event.city_id'         => 'required',
        ];
    }

    public function import()
    {
        $fbImport = new FBImportService($this->event->facebook_id);     
                
        $this->fbResults = $fbImport->getFBNode();
        
        $fbImport->matchImport($this->event);    
        
        if ($fbImport->hasCover) {            
            $this->thumbnail = $fbImport->graphNode->getField('cover')['source']; 
        }
    }

    public function updateEventFacebook_Id($id)
    {
        dd($id);
    }

    public function updateThumbnail(array $file)
    {
        $this->thumbnail = $file;
    }

    public function updateStyles($styles)
    {
        $this->styles = $styles;
    }

    public function updateOrganizations($organizations)
    {
        $this->organizations = $organizations;
    }

    public function delete()
    {
        $this->event->delete();
        
        session()->flash('success', 'Event deleted successfully');
        
        return redirect()->route('event.index');
    }

    public function updatedEventName()
    {
        $this->event->slug = Str::slug($this->event->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;
        //TODO slug must include city and date
    }

    public function save()
    {
        $validatedData = $this->validate();

        $this->event->user_id = auth()->user()->id;

        $this->event->save($validatedData);

        if ($this->thumbnail) {
            $this->handleThumbnailUpload($this->event, $this->thumbnail);
        }

        if ($this->styles) {
            $this->event->styles()->sync($this->styles);
        }

        session()->flash('success', 'Event saved successfully.');

        return redirect(route('event.index'));
    }

    public function mount(Event $event = null)
    {
        if ($event->exists) {
            $this->event = $event;
            $this->action = 'update';
        } else {
            $this->event = new Event;
            $this->event->type = '';
            $this->event->status = '';
            $this->event->location_id = null;
        }
    }

    public function render()
    {
        return view('livewire.event.form');
    }
}

