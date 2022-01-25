<?php

namespace App\Http\Livewire\Lesson;

use App\Models\Lesson;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Collection;

class VideosForm extends Component
{
    public Lesson $lesson;
    public Video|null $video;
    public Collection $videosList;
    public string $action = 'store';

    protected $rules = [
        'video.title'      => 'required|string',
        'video.description'=> 'nullable',
        'video.embed'      => 'nullable',
        'video.url'        => 'nullable',
    ];

    public function edit(Video $v)
    {        
        $this->video = $v;                
        $this->action = 'update';
    }

    public function save()
    {
        $this->validate();
        
        if ($this->action == 'store') {                       
            $this->video->user_id = auth()->user()->id;
            $this->video->save();
            $this->lesson->videos()->attach($this->video, ['user_id' => auth()->user()->id]);
        } else if ($this->action == 'update') {            
            $this->video->update([
                'title'         => $this->video->title,
                'description'   => $this->video->description,
                'embed'         => $this->video->embed,
                'url'           => $this->video->url,
            ]);
        }
        
        if ($this->lesson->course->styles) {
            // dd($this->lesson->course->styles);
            $this->video->styles()->sync($this->lesson->course->styles);
        }
        
        session()->flash('success','Video saved successfully!');
        
        $this->loadVideosList();

    }

    public function loadVideosList()
    {
        $lesson = Lesson::with('videos')->findOrFail($this->lesson->id);
        $this->videosList = $lesson->videos;
        $this->video = new Video();                   
        $this->action = 'store';  
    }
 
    public function mount(Lesson $lesson)
    {
        $this->lesson = $lesson;
        $this->loadVideosList();        
    }

    public function render()
    {
        return view('livewire.lesson.videos-form');
    }
}
