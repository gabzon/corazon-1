<?php

namespace Database\Seeders;

use Database\Seeders\Courses\Bandoleros;
use Database\Seeders\Courses\Casablanka;
use Database\Seeders\Courses\FeralTango;
use Database\Seeders\Courses\PCSalsa;
use Database\Seeders\Courses\SalsaFusion;
use Database\Seeders\Courses\Sibenik\Hrvoje;
use Database\Seeders\Courses\Soss;
use Database\Seeders\Courses\Split\BailaConmigo;
use Database\Seeders\Courses\Split\CenterOfDance;
use Database\Seeders\Courses\Split\Negrita;
use Database\Seeders\Courses\TangoZagreb;
use Database\Seeders\Courses\Zadar\Kizzadar;
use Database\Seeders\Courses\Zadar\Tonciivana;
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
            EventSeeder::class,
            Negrita::class,
            Kizzadar::class,
            Tonciivana::class,
            Hrvoje::class,
            BailaConmigo::class,
            CenterOfDance::class,
            // TangoZagreb::class,
            // Casablanka::class,
            // CourseSeeder::class,
            ]
        );        
    }
}
