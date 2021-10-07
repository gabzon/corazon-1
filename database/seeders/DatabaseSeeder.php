<?php

namespace Database\Seeders;

use Database\Seeders\Courses\Bandoleros;
use Database\Seeders\Courses\FeralTango;
use Database\Seeders\Courses\PCSalsa;
use Database\Seeders\Courses\SalsaFusion;
use Database\Seeders\Courses\Soss;
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
            ClassroomSeeder::class,
            OrganizationSeeder::class,  
            SalsaFusion::class,            
            Bandoleros::class,    
            FeralTango::class,       
            PCSalsa::class, 
            Soss::class, 
            // CourseSeeder::class,
            EventSeeder::class,
            ]
        );        
    }
}
