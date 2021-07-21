<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    
        $this->call([
            UserSeeder::class,
            StyleSeeder::class,
            CitySeeder::class,
            SkillSeeder::class,
            LocationSeeder::class,        
            OrganizationSeeder::class,  
            // CourseSeeder::class,
            // EventSeeder::class,
            ]
        );        
    }
}
