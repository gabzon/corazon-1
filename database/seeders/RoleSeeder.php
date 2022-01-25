<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $admin = Role::firstOrCreate([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'label' => 'Full access for an organization',
        ]);
        
        $manager = Role::firstOrCreate([
            'name'  => 'Ambassador',
            'slug'  => 'ambassador',
            'label' => 'Can CRUD events for a city',
        ]);

        $manager = Role::firstOrCreate([
            'name'  => 'DJ',
            'slug'  => 'dj',
            'label' => 'Can CRUD events',
        ]);

        $secretary = Role::firstOrCreate([
            'name'  => 'Organizer',
            'slug'  => 'organizer',
            'label' => 'Event organizer, full access on event management for an organization',
        ]);

        $instructor = Role::firstOrCreate([
            'name'  => 'Instructor',
            'slug'  => 'instructor',
            'label' => 'A person who teaches and manages dance classes, Can CRUD courses in an organization, CRUD Lessons',
        ]);

        $assistant = Role::firstOrCreate([
            'name'  => 'Administrative Assistant',
            'slug'  => 'administrative-assistant',
            'label' => 'Can manage an organization',
        ]);                 
        
        Role::firstOrCreate([
            'name'  => 'Volonteer',
            'slug'  => 'volonteer',
            'label' => 'Can work and help an organization',
        ]);

        Role::firstOrCreate([
            'name'  => 'Musician',
            'slug'  => 'musician',
            'label' => 'Can work for an event',
        ]);

        Role::firstOrCreate([
            'name'  => 'Artist',
            'slug'  => 'artist',
            'label' => 'Can work for an event',
        ]);

        Role::firstOrCreate([
            'name'  => 'Bouncer',
            'slug'  => 'bouncer',
            'label' => 'Can verify and edit event registrations',
        ]);

        Role::firstOrCreate([
            'name'  => 'Staff',
            'slug'  => 'staff',
            'label' => 'Works at an event',
        ]);

        $editor = Role::firstOrCreate([
            'name'  => 'Editor',
            'slug'  => 'editor',
            'label' => 'A person who helps the manager with payments and the administration',
        ]);  

        Role::firstOrCreate([
            'name'  => 'Publisher',
            'slug'  => 'publisher',
            'label' => 'Can create and publish events',
        ]);  

        $secretary = Role::firstOrCreate([
            'name'  => 'Secretary',
            'slug'  => 'secretary',
            'label' => 'In charge of controlling registrations, courses as well as answering phone calls and emails',
        ]);

    }
}
