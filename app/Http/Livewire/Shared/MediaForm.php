<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia as ConcernsWithMedia;
use Illuminate\Support\Str;

class MediaForm extends Component
{
    use ConcernsWithMedia;
    
    public $model;
    public $mediaComponentNames = ['cover','square','portrait','gallery'];
    public $cover;
    public $square;
    public $portrait;
    public $gallery;

    public $coverCollection;
    public $squareCollection;
    public $portraitCollection;
    public $galleryCollection;
    
    public $video1;
    public $video2;
    public $video3;

    public bool $refreshPage = true;

    public function removeImage($index)
    {
        $images = $this->product->getMedia('products');
        $images[$index]->delete();
        session()->flash('success','Image deleted successfully');
        if ($this->refreshPage) {                        
            return redirect(request()->header('Referer'));        
        } 
    }
    
    public function save()
    {       
        if (class_basename($this->model) == 'Course') {
            $this->model->update([
                'video1' => $this->video1,
                'video2' => $this->video2,
                'video3' => $this->video3,
            ]);
        }else{
            $this->model->video = $this->video1;
            $this->model->save();
        }
                
        if ($this->cover) {
            $this->model->addFromMediaLibraryRequest($this->cover)->toMediaCollection($this->coverCollection);
        }
        if ($this->square) {
            $this->model->addFromMediaLibraryRequest($this->square)->toMediaCollection($this->squareCollection);
        }
        if ($this->portrait) {
            $this->model->addFromMediaLibraryRequest($this->portrait)->toMediaCollection($this->portraitCollection);
        }
        if ($this->gallery) {
            $this->model->addFromMediaLibraryRequest($this->gallery)->toMediaCollection($this->galleryCollection);
        }

        session()->flash('success', 'Media saved successfully!');
    }

    public function mount($model)
    {
        $this->model = $model;
        if (class_basename($this->model) == 'Course') {
            $this->video1 = $model->video1;
            $this->video2 = $model->video2;
            $this->video3 = $model->video3;
        }else{
            $this->video1 = $model->video;
        }
        
        $plural = Str::plural(Str::lower(class_basename($this->model)));
        $this->coverCollection = $plural;
        $this->squareCollection = $plural .'-square';
        $this->portraitCollection = $plural . '-portrait';
        $this->galleryCollection = $plural . '-gallery';
    }

    public function render()
    {
        
        return view('livewire.shared.media-form');
    }
}



