<?php

namespace App\Http\Livewire\Role;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class ListForm extends Component
{
    use WithPagination;
    
    public Role $role;
    
    protected function rules(){
        return [
            'role.name'     => 'required|unique:roles,name,'.$this->role->id,
            'role.label'    => 'nullable',
        ];
    } 

    public function save()
    {    
        $validatedData = $this->validate();
        $this->role->slug = Str::slug($this->role->name, '-');        
        $this->role->save($validatedData);
        session()->flash('success','Role saved successfully');
        $this->role = new Role();
    }

    public function edit(Role $role)
    {
        $this->role = $role;
    }

    public function delete(Role $role)
    {
        $role->delete();
    }

    public function mount(Role $role)
    {
        if ($role->exists) {
            $this->role = $role;
        }else{
            $this->role = new Role(); 
        }        
    }

    public function render()
    {
        return view('livewire.role.list-form', [
            'roles' => Role::paginate(10),
        ]);
    }
}
