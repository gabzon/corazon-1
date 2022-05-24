<?php

namespace App\Http\Livewire\Style;

use App\Models\Style;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Listing extends Component
{
    public function render()    
    {
        $styles = Style::whereHas('events', function($query){
            return $query->where('status','active');
        })->withCount(['events', 'events as events_count' => function($query){
            return $query->where('status', 'active');
        }])->orderBy('events_count', 'desc')->get();        
        
        return view('livewire.style.listing', compact('styles'));
    }
}

// $cities = City::whereHas('events', function (Builder $query) {
//     $query->where('status', 'active');
// })->withCount('events')
// ->orderBy('events_count', 'desc')->get();



// $posts = Post::withCount([
//     'upvotes', 
//     'upvotes as upvotes_count' => function ($query) {
//         $query->where('upvotes_count', '>', 5);
//     }])
//     ->get();


//     \DB::table('users')
//        ->select('status', \DB::raw('count(*) as total'))
//        ->groupBy('status')
//        ->get();