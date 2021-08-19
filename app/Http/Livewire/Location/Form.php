<?php

namespace App\Http\Livewire\Location;

use App\Models\Location;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $action = 'store';
    public $location;
    public $name;
    public $slug;
    public $shortname;
    public $comments;
    public $contact;
    public $website;
    public $email;
    public $phone;
    public $contract;
    public string $type = '';
    public $tmp;

    protected $rules = [
        'location.name'     => 'required|min:5',
        'location.slug'     => 'required|min:5',
        'location.shortname'=> 'nullable',
        'location.comments' => 'nullable',
        'location.contact'  => 'nullable',
        'location.website'  => 'nullable|min:12|url',
        'location.email'    => 'nullable|min:5|email',
        'location.phone'    => 'nullable',
        'location.contract' => 'nullable',
        'location.type'     => 'nullable',
    ];

    public function store()
    {         
        $this->validate(); 

        $location = Location::create([
            'name'                  => $this->name,
            'slug'                  => $this->slug,
            'shortname'             => $this->shortname,            
            'comments'              => $this->comments,
            'contact'               => $this->contact,
            'website'               => $this->website,            
            'email'                 => $this->email,
            'phone'                 => $this->phone,
            'contract'              => $this->tmp,            
            'type'                  => $this->type,            
            'user_id'               => auth()->user()->id,            
        ]);        

        session()->flash('success', 'Location created successfully!');
        
        return redirect()->route('location.edit', $location);
    }

    public function updatedContract()
    {
        $this->validate([
            'contract' => 'nullable|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ]);
        $this->tmp = $this->contract->store('locations/contracts');      
        $this->contract = $this->tmp;
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value . '-' . \Carbon\Carbon::now()->timestamp,'-'); 
    }

    public function remove()
    {
        if(file_exists(storage_path($this->contract))){
            Storage::delete($this->contract);            
            session()->flash('sucess','Contract deleted successfully!');
        }        
    }

    public function update()
    {
        $this->validate([
            'name'      => 'required|min:3',
            'email'     => 'nullable|min:5|email',
            'contact'   => 'required|min:3',
            'website'   => 'nullable|min:12|url',
        ]); 

        $this->location->update([
            'name'                  => $this->name,
            'slug'                  => $this->slug,
            'shortname'             => $this->shortname,                                
            'comments'              => $this->comments,
            'contact'               => $this->contact,
            'website'               => $this->website,
            'email'                 => $this->email,
            'phone'                 => $this->phone,  
            'type'                  => $this->type,                                                                           
            'user_id'               => auth()->user()->id,                        
        ]);

        if (!$this->contract == null) {
            if ($this->location->contract != $this->contract) {                    
                $this->location->update([ 'contract' => $this->tmp ]);            
                $this->location = $this->tmp;
            }
        }
        
        session()->flash('success', 'Location updated successfully!');
                
    }

    public function mount($location = null)
    {
        if ($location) {
            $this->action       = 'update';
            $this->location     = $location;
            $this->name         = $location->name;
            $this->slug         = $location->slug;
            $this->shortname    = $location->shortname;                                                
            $this->comments     = $location->comments;
            $this->contact      = $location->contact;
            $this->website      = $location->website;
            $this->email        = $location->email;
            $this->phone        = $location->phone;
            $this->contract     = $location->contract; 
            $this->type         = $location->type ?? '';
        }
    }

    public function render()
    {
        return view('livewire.location.form');
    }
}
























