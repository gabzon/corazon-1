<?php

namespace Database\Seeders;

use App\Models\Space;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        // 1
        Space::create([
            'name' => 'Havana',
            'slug' => 'havana',
            'm2' => 100,
            'capacity' => 50,
            'limit_couples' => 30,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);      

        // 2
        Space::create([
            'name' => 'Santiago de Cuba',
            'slug' => 'santiago-de-cuba',
            'm2' => 60,
            'capacity' => 40,
            'limit_couples' => 20,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Guantanamo',
            'slug' => 'Guantanamo',
            'm2' => 40,
            'capacity' => 20,
            'limit_couples' => 10,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Matanzas',
            'slug' => 'matanzas',
            'm2' => 40,
            'capacity' => 20,
            'limit_couples' => 10,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Santa Clara',
            'slug' => 'santa-clara',
            'm2' => 20,
            'capacity' => 10,
            'limit_couples' => 5,                        
            'location_id' => 1,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Velika soba',
            'slug' => 'velika-soba',
            'm2' => 60,
            'capacity' => 60,
            'limit_couples' => 40,                        
            'location_id' => 2,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Mala soba',
            'slug' => 'mala-soba',
            'm2' => 40,
            'capacity' => 40,
            'limit_couples' => 40,                        
            'location_id' => 2,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Salsa fusion',
            'slug' => 'salsa-fusion',
            'm2' => 60,
            'capacity' => 60,
            'limit_couples' => 40,                        
            'location_id' => 3,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Velika soba',
            'slug' => 'velika-soba',
            'm2' => 60,
            'capacity' => 60,
            'limit_couples' => 40,                        
            'location_id' => 4,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Mala soba',
            'slug' => 'mala-soba',
            'm2' => 40,
            'capacity' => 40,
            'limit_couples' => 40,                        
            'location_id' => 4,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Soss',
            'slug' => 'soss',
            'm2' => 40,
            'capacity' => 40,
            'limit_couples' => 40,                        
            'location_id' => 5,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Mint Fitness Factory Dance Studio',
            'slug' => 'mint-fitness-factory-dance-studio',
            'location_id' => 21,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => '1st floor hall',
            'slug' => '1st-floor-hall', 
            'location_id' => 24,
            'user_id' => 1,
        ]);

        Space::create([
            'name'          => 'Vitalnost',
            'slug'          => 'vitalnost', 
            'm2'            => 60,
            'capacity'      => 20,
            'limit_couples' => 10,
            'mirror_type'   => 'full',
            'floor_type'    => 'parket',
            'location_id'   => 28,
            'user_id'       => 1,
        ]);

        Space::create([
            'name' => 'Žižula',
            'slug' => 'zizula', 
            'location_id' => 29,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'Pomak',
            'slug' => 'pomak', 
            'location_id' => 30,
            'user_id' => 1,
        ]);
        
        Space::create([
            'name' => 'Dance Center',
            'slug' => 'dance-center-split', 
            'location_id' => 31,
            'user_id' => 1,
        ]);
        
        Space::create([
            'name' => 'Tango Zagreb',
            'slug' => 'tango-zagreb', 
            'location_id' => 37,
            'user_id' => 1,
        ]);

        Space::create([
            'name' => 'CasaBlanka',
            'slug' => 'casablanka', 
            'location_id' => 40,
            'user_id' => 1,
        ]);
    }
}
