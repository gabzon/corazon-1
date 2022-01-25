<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public $paginate = 10;

    public function impersonate($uid)
    {
        if (auth()->user()->role != 'admin') {
            return;
        }

        $originalId = auth()->user()->id;
        
        session()->put('impersonate', $originalId);
        
        Auth::loginUsingId($uid);   
        
        return redirect('dashboard');
    }

    public function render()
    {
        return view('livewire.user.table', [
            'users' => User::paginate($this->paginate)
        ]);
    }
}
