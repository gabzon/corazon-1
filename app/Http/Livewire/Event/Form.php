<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Http\Livewire\Traits\WithThumbnail;
use App\Services\FBLocationService;
use App\Services\LocationService;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Laravel\Socialite\Facades\Socialite;

use function PHPUnit\Framework\isEmpty;

// TODO improve validations
// TODO Tests

class Form extends Component
{
    use WithThumbnail;

    public Event $event;
    public string $action = 'store';

    protected $listeners = ['thumbnail' => 'updateThumbnail', 'selectedStyles' => 'updateStyles', 'selectedOrganizations' => 'updateOrganizations'];

    protected $rules = [
        'event.name'            => 'required',
        'event.slug'            => 'required',
        'event.tagline'         => 'nullable',
        'event.description'     => 'nullable',
        'event.start_date'      => 'required|date',
        'event.end_date'        => 'required|date',
        'event.start_time'      => 'required',
        'event.end_time'        => 'required',
        'event.min_price'       => 'nullable',
        'event.max_price'       => 'nullable',
        'event.currency'        => 'nullable',
        'event.video'           => 'nullable',
        'event.thumbnail'       => 'nullable',
        'event.type'            => 'required',
        'event.status'          => 'required',
        'event.publish_at'      => 'nullable|date',
        'event.contact'         => 'nullable',
        'event.email'           => 'nullable',
        'event.phone'           => 'nullable',
        'event.website'         => 'nullable',
        'event.facebook'        => 'nullable',
        'event.twitter'         => 'nullable',
        'event.instagram'       => 'nullable',
        'event.youtube'         => 'nullable',
        'event.tiktok'          => 'nullable',
        'event.user_id'         => 'nullable',
        'event.location_id'     => 'nullable',
        'event.city_id'         => 'required',
        'event.facebook_id'     => 'nullable',
    ];

    public $thumbnail;
    public $styles;
    public $organizations;

    public function import()
    {
        
        $token = auth()->user()->facebook_token;
        
        $fb = new Facebook([
            'app_id' => config('services.facebook.app_id'),
            'app_secret' => config('services.facebook.app_secret'),
            'default_graph_version' => 'v5.0',
            'default_access_token' => $token,
            'enable_beta_mode' => true,
        ]);

        $helper = $fb->getCanvasHelper();        

        try {
            $url = '/'. $this->event->facebook_id .'?fields=cover,name,place,start_time,end_time,is_online,timezone,description';                        
            $response = $fb->get($url, $token);
        } catch (FacebookResponseException $e) {    
            // dd($e->getMessage());        
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (FacebookSDKException $e) {
            // dd('er 2');
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
                
        $graphNode = $response->getGraphNode();

        
        $this->event->name = $graphNode['name'];
        $this->event->slug = Str::slug($this->event->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;
        $this->event->description   = $graphNode['description'];
        
        $this->event->start_date = $graphNode['start_time'];
        $this->event->end_date = $graphNode['end_time'];        
        $this->event->start_time = $this->event->start_date->format('H:i:s');
        $this->event->end_time = $this->event->end_date->format('H:i:s');
        $this->event->user_id = auth()->user()->id;
        
        if ($graphNode['place']) {
            $place = new FBLocationService($graphNode['place']);
            $this->event->city_id = $place->getCityID();            
            $this->event->location_id = $place->getFBLocationID();
        }
        
        $this->event->save();

        $name = 'corazon-' . Str::slug($this->event->title, '-') . '-' . date('s');

        $this->event->addMediaFromUrl($graphNode['cover']['source'])
            ->withResponsiveImages()
            ->usingFileName($name)
            ->toMediaCollection('events');
        $this->event->thumbnail = $this->event->getMedia('events')->last()->getUrl();              # code...                
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

    public function updatedEventName()
    {
        $this->event->slug = Str::slug($this->event->name, '-') . '-' . \Carbon\Carbon::now()->timestamp;
        //TODO slug must include city and date
    }

    public function save()
    {
        $this->validate();

        $this->event->user_id = auth()->user()->id;

        $this->event->save();

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
            $this->type = '';
        }
    }

    public function render()
    {
        return view('livewire.event.form');
    }
}
