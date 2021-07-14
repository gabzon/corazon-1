<?php

namespace App\Http\Livewire\Classroom;

use App\Models\Classroom;
use Livewire\Component;
use Illuminate\Support\Str;

class Form extends Component
{
    public $action = 'store';
    public $classroom;
    public $name;
    public $slug;
    public $m2;
    public $capacity;
    public $limit_couples;
    public $price_hour;
    public $price_month;
    public $color = '';
    public $danceShoes;
    public $location = '';
    public $comments;
    
    public function store()
    {                                
        $classroom = Classroom::create([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'm2'            => $this->m2,
            'capacity'      => $this->capacity,
            'limit_couples' => $this->limit_couples,
            'price_hour'    => $this->price_hour,
            'price_month'   => $this->price_month,
            'color'         => $this->color,
            'dance_shoes'   => $this->danceShoes,
            'comments'      => $this->comments,
            'location_id'   => $this->location,
            'user_id'       => auth()->user()->id,
        ]);
        // 'location_id'   => intval(),
        // $classroom->location()->associate()

        session()->flash('success','Classroom created successfully.');

        return redirect(route('location.show', $this->location));
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function update()
    {
        $this->classroom->update([
            'name'          => $this->name,
            'slug'          => $this->slug,
            'm2'            => $this->m2,
            'capacity'      => $this->capacity,
            'limit_couples' => $this->limit_couples,
            'price_hour'    => $this->price_hour,
            'price_month'   => $this->price_month,
            'color'         => $this->color,
            'dance_shoes'   => $this->danceShoes,
            'comments'      => $this->comments,
        ]);

        $this->classroom->location()->associate($this->location)->save();

        session()->flash('success','Classroom updated successfully.');

        return redirect(route('location.index'));
    }    

    public function mount($classroom = null, $location = null)
    {
        if ($location) {            
            $this->location = $location;
        }
        
        if ($classroom) {         
            $this->action       = 'update';
            $this->classroom    = $classroom;
            $this->name         = $classroom->name;
            $this->slug         = $classroom->slug;
            $this->m2           = $classroom->m2;
            $this->capacity     = $classroom->capacity;
            $this->limit_couples= $classroom->limit_couples;
            $this->price_hour   = $classroom->price_hour;
            $this->price_month  = $classroom->price_month;
            $this->color        = $classroom->color;
            $this->danceShoes  = $classroom->dance_shoes;
            $this->location     = $classroom->location_id;
            $this->comments     = $classroom->comments;        
        }
    }

    public function render()
    {
        return view('livewire.classroom.form');
    }
}


