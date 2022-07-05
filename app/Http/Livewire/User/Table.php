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
    public $search;
    public $gender;
    public $role;

    public function updating($name, $value)
    {
        $this->resetPage();
    } 

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
        $users = User::byNameEmailUsername($this->search)
                        ->byGender($this->gender)
                        // ->orderBy('name', 'asc')
                        ->latest();
        return view('livewire.user.table', [
            'users' => $users->paginate($this->paginate)
        ]);
    }
}
