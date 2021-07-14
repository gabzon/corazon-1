<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Services\PostService;
use App\Http\Livewire\Traits\WithThumbnail;


class Form extends Component
{
    use WithThumbnail;
    protected $listeners = ['thumbnail' => 'updateThumbnail'];

    public Post $post;
    public string $action = 'store';
    public $file;

    protected $rules = [
        'post.title'    => 'required',
        'post.slug'     => 'required',
        'post.content'  => 'required',
        'post.video'    => 'nullable',
        'post.thumbnail'=> 'nullable',    
        'post.status'   => 'required',
        'post.user_id'  => 'nullable',   
    ];

    public function updateThumbnail(array $value)    
    {                
        $this->file = $value;                         
    }
    
    public function updatedPostTitle($value)
    {        
        $this->post->slug = Str::slug($value,'-')  . '-' . \Carbon\Carbon::now()->timestamp;
    }

    public function save()
    {   
        $this->validate(); 

        $this->post->user_id = auth()->user()->id;
        $this->post->save();    
        
        if ($this->file) {                       
            $this->handleThumbnailUpload($this->post, $this->file);
        }

        session()->flash('success', 'Post saved succesfully!');
        
        return redirect()->route('post.index');
    }
    
    public function mount(Post $post =  null)
    {    
        if ($post->exists) {
            $this->action       = 'update';
        } else {
            $this->post = new Post;
            $this->post->status = '';
        }
    }

    public function render()
    {
        return view('livewire.post.form');
    }

}

