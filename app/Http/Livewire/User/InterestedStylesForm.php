<?php

namespace App\Http\Livewire\User;

use App\Models\Interest;
use App\Models\Style;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InterestedStylesForm extends Component
{
    public User $user;    
    public $preferedStyles = [];
    
    public function save()
    {
        $styles = Style::select(['id','name'])->whereIn('family', $this->preferedStyles)->get();
        $this->user->styles()->sync($styles);
        session()->flash('success','Prefered styles saved successfully');
    }
    
    public function mount(User $user)
    {
        $this->user = $user;        
        $this->preferedStyles = array_values($user->styles()->pluck('family')->unique()->toArray());          
    }

    public function render()
    {
        $families = Style::all()->groupBy('family');  

        return view('livewire.user.interested-styles-form', [ 
            'families' => $families,
        ]);
    }
}
