<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {            
        // view_reports
        // create_
        // read_
        // update_
        // delete_            
        Permission::firstOrCreate([
            'name'  => 'Create Courses',
            'slug'  => 'create_courses',
            'label' => 'The person has the right to view, create, edit and delete courses', 
        ]);
        Permission::firstOrCreate([
            'name'  => 'Read Courses',
            'slug'  => 'read_courses',
            'label' => 'The person has the right to view, create, edit and delete courses', 
        ]);
        Permission::firstOrCreate([
            'name'  => 'CRUD Courses',
            'slug'  => 'crud_courses',
            'label' => 'The person has the right to view, create, edit and delete courses', 
        ]);
        // ---------------------------------------------------------------------------------
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Users',
            'slug'  => 'crud_users',
            'label' => 'The person has the right to view, create, edit and delete users', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Roles',
            'slug'  => 'crud_roles',
            'label' => 'The person has the right to view, create, edit and delete roles', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Permissions',
            'slug'  => 'crud_permissions',
            'label' => 'The person has the right to view, create, edit and delete permissions', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Styles',
            'slug'  => 'crud_styles',
            'label' => 'The person has the right to view, create, edit and delete styles', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Locations',
            'slug'  => 'crud_locations',
            'label' => 'The person has the right to view, create, edit and delete locations', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Classrooms',
            'slug'  => 'crud_classrooms',
            'label' => 'The person has the right to view, create, edit and delete classrooms', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Payments',
            'slug'  => 'crud_payments',
            'label' => 'The person has the right to view, create, edit and delete payments', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Orders'
        ]);
    }
}
