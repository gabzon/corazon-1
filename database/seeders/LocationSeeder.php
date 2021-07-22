<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name'                  => 'Buena Vista',
            'slug'                  => 'buena-vista',
            'shortname'             => 'bv',
            'address'               => 'Savska cesta 120',
            'zip'                   => '10000',
            'neighborhood'          => 'trešnjevka',
            'phone'                 => '+385 095 973 8494',
            'video'                 => '<iframe width="100%" height="215" src="https://www.youtube.com/embed/X_YVeB6JLb0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'google_maps'           => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.883646308633!2d15.955561715896785!3d45.79355871942633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d71555555555%3A0xa833ef50ea5717e7!2sBuena%20Vista%20Club%20Zagreb!5e0!3m2!1sen!2shr!4v1619184594286!5m2!1sen!2shr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        Location::create([
            'name'                  => 'Bandoleros',
            'slug'                  => 'bandoleros',
            'shortname'             => 'ban',
            'address'               => 'Dobojska ulica 36',
            'zip'                   => '10110',
            'neighborhood'          => 'trešnjevka',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        Location::create([
            'name'                  => 'Salsa Fusion',
            'slug'                  => 'salsa-fusion',
            'shortname'             => 'sf',
            'address'               => 'Avenija Dubrovnik 15/25',
            'zip'                   => '10000',
            'neighborhood'          => 'trešnjevka',
            'user_id'               => 1,
            'city_id'               => 1,
        ]);

        // Location::factory(5)->create();

        Classroom::create([
            'name' => 'Big room',
            'slug' => 'big-room',
            'm2' => 100,
            'capacity' => 50,
            'limit_couples' => 30,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);
        
        Classroom::create([
            'name' => 'medium room',
            'slug' => 'medium-room',
            'm2' => 60,
            'capacity' => 40,
            'limit_couples' => 20,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);

        Classroom::create([
            'name' => 'small room upstairs',
            'slug' => 'small-room-upstairs',
            'm2' => 40,
            'capacity' => 20,
            'limit_couples' => 10,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);

        Classroom::create([
            'name' => 'Velika',
            'slug' => 'velika',
            'm2' => 40,
            'capacity' => 20,
            'limit_couples' => 10,                        
            'location_id' => 2,
            'user_id' => 1,
        ]);

        Classroom::create([
            'name' => 'Mala soba',
            'slug' => 'mala soba',
            'm2' => 20,
            'capacity' => 10,
            'limit_couples' => 5,                        
            'location_id' => 2,
            'user_id' => 1,
        ]);

        Classroom::create([
            'name' => 'Salsa fusion',
            'slug' => 'salsa-fusion',
            'm2' => 60,
            'capacity' => 60,
            'limit_couples' => 40,                        
            'location_id' => 3,
            'user_id' => 1,
        ]);

    }
}


