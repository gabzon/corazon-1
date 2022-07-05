<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\MediaLibraryPro\Http\Livewire\Concerns\WithMedia;

class ProductForm extends Component
{
    use WithMedia;
    
    public $mediaComponentNames = ['images'];
    public $images;    
    public Product $product;
    public bool $refreshPage = true;
    
    protected $rules = [
        'product.name'      => 'required',
        'product.slug'      => 'required',
        'product.tagline'   => 'nullable',
        'product.description'=> 'nullable',
        'product.deadline'  => 'nullable',
        'product.full_price'=> 'required|numeric',
        'product.promo_price'     => 'required|numeric',
        'product.ordered'   => 'nullable',
        'product.content'   => 'required',
        'product.video'     => 'nullable',
        'product.thumbnail' => 'nullable',
        'product.public'    => 'required',
        'product.status'    => 'required',
        'product.qty'       => 'required|numeric',                       
    ];


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
        $this->validate();
        
        $this->product->user_id = auth()->user()->id;
        
        $this->product->save();

        $this->product->addFromMediaLibraryRequest($this->images)->toMediaCollection('products');
        
        session()->flash('success', 'Product saved successfully!');        
        
        $this->clearMedia();
        
        return redirect()->route('product.index');
    }

    public function updatedProductName()
    {
        $this->product->slug = Str::slug($this->product->name, '-') . '-' . Carbon::now()->timestamp;
    }
    
    public function mount(Product $product = null)
    {
        if ($product->exists) {
            $this->product = $product;
        }else{
            $this->product = new Product;               
        }
    }

    public function render()
    {
        return view('livewire.product.product-form');
    }
}

