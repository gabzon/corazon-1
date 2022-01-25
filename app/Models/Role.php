<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'slug',
        'label'
    ];
    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }
    
    public function allowTo($permission)
    {
        $this->permissions()->sync($permission);
    }
    
    public function hasPermission($id)
    {
        return in_array($id, $this->permissions->pluck('id')->toArray());
    }
    
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
