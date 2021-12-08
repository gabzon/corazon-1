<?php

namespace App\Http\Livewire\Lesson\Form;

use App\Models\Lesson;
use Livewire\Component;

class DefaultForm extends Component
{
    public Lesson $lesson;
    public string $method = 'store';

    protected $rules = [
        'lesson.title'         => 'required|string',
        'lesson.date'          => 'required|date',
        'lesson.description'   => 'nullable|string',
        'lesson.comments'      => 'nullable|string',
        'lesson.user_id'       => 'required',
        'lesson.organization_id' => 'required',
    ];

    public function save()
    {
        $this->validate();        

        $this->lesson->save();

        session()->flash('success','Lesson saved successfully!');
        
        if ($this->method == 'store') {
            return redirect()->route('lesson.edit', $this->lesson);
        }

    }

    public function mount(Lesson $lesson = null, int $oid = null)
    {
        if ($lesson->exists) {
            $this->lesson = $lesson;
            $this->method = 'update';
        }else{            
            $this->lesson = new Lesson();
            $this->lesson->user_id = auth()->user()->id;
            if ($oid) {
                $this->lesson->organization_id = $oid;
            }                                                    
        }
    }

    public function render()
    {
        return view('livewire.lesson.form.default-form');
    }
}


    
    
    
    
    
    