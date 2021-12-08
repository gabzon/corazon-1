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
    public $styles = [
        'cuban'      => 0,
        'line'       => 0,
        'urban'      => 0,
        'bachata'    => 0,
        'kizomba'    => 0,
        'tango'      => 0,
    ];
    
    public function save()
    {
        $listOfStyles = Style::select(['id','family','name'])->get();        
        foreach ($listOfStyles as $style) 
        {
            if (in_array($style->family, $this->styles)) {                                                
                if (!$style->interested()->where(['user_id' => $this->user->id])->exists()) {
                    $style->interested()->create(['user_id' => $this->user->id]);
                }else{
                    session()->flash('warning','Preferred styles already in the your preferences');
                }                
            }   
        }
        
        session()->flash('success','Preferred styles updated successfully!');
    }
    
    public function mount(User $user)
    {
        $this->user = $user;
        $this->userStyles($user);
    }

    public function userStyles($user)
    {        
        $families = [];
        $listOfStyles = Style::select(['id','family','name'])->get();        
        foreach ($listOfStyles as $style) {
            if ($style->interested()->where(['user_id' => $user->id])->exists()) {                
                $families[] = $style->family;
            }
        }        
        
        if (in_array('Cuban Salsa', array_unique($families))) {
            $this->styles['cuban'] = 1;
        }  
        
        if (in_array('Line Salsa', array_unique($families))) {
            $this->styles['line'] = 1;
        }

        if (in_array('Bachata', array_unique($families))) {
            $this->styles['bachata'] = 1;
        }
        
        if (in_array('Kizomba', array_unique($families))) {
            $this->styles['kizomba'] = 1;
        }

        if (in_array('Urban', array_unique($families))) {
            $this->styles['urban'] = 1;
        }

        if (in_array('Tango', array_unique($families))) {
            $this->styles['tango'] = 1;
        }                                 

    }

    public function render()
    {
        // $styles = Style::select('family', DB::raw('count(*)'))->groupBy('family')->get();  
        $cuban      = Style::select('name')->whereFamily('Cuban Salsa')->get();
        $line       = Style::select('name')->whereFamily('Line Salsa')->get();
        $urban      = Style::select('name')->whereFamily('Urban')->get();
        $bachata    = Style::select('name')->whereFamily('Bachata')->get();
        $kizomba    = Style::select('name')->whereFamily('Kizomba')->get();
        $tango      = Style::select('name')->whereFamily('Tango')->get();

        return view('livewire.user.interested-styles-form', [ 
            'cuban'     => $cuban,
            'line'      => $line,
            'urban'     => $urban,
            'bachata'   => $bachata,
            'kizomba'   => $kizomba,
            'tango'     => $tango,
        ]);
    }
}
