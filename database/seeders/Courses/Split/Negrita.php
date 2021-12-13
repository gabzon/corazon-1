<?php

namespace Database\Seeders\Courses\Split;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Negrita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','La negrita')->first();
        $city = City::where('name','Split')->first();
        $style = Style::select(['id','name'])->get();        
        $s = $style->where('name','Salsa on2')->pluck('id');

        $c1 = Course::create([            
            'name'           => 'Salsa Basics',
            'tagline'        => '',
            'slug'           => 'salsa-basics-1635168133',
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '20:10:00',
            'end_time_tue'   => '21:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 12,
        ]);
        $c1->styles()->attach($s);

        $c2 = Course::create([            
            'name'           => 'Salsa Shines',
            'tagline'        => '',
            'slug'           => 'salsa-shines-1635168498',
            'level'          => 'open level',
            'level_code'     => 'op',
            'focus'          => 'selfwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '21:10:00',
            'end_time_tue'   => '22:00:00',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 12,
        ]);
        $c2->styles()->attach($s);

        $c3 = Course::create([            
            'name'           => 'Shines Choreo',            
            'slug'           => 'shines-choreo-1635168790',
            'level'          => 'intermediate',
            'level_code'     => 'b3',
            'focus'          => 'choreography',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '21:30:00',
            'end_time_wed'   => '22:30:00',
            'user_id'        => 1,
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 12,
        ]);
        $c3->styles()->attach($s);

        $c4 = Course::create([            
            'name'           => 'Salsa Flow',
            'tagline'        => '',
            'slug'           => 'salsa-flow-1635169391',
            'level'          => 'open level',
            'level_code'     => 'op',
            'focus'          => 'selfwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '20:10:00',
            'end_time_thu'   => '21:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 12,
        ]);
        $c4->styles()->attach($s);

        $c5 = Course::create([            
            'name'           => 'Salsa Shines',
            'tagline'        => '',
            'slug'           => 'salsa-shines-1635169786',        
            'level'          => 'intermediate',
            'level_code'     => 'b3',
            'focus'          => 'selfwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '21:10:00',
            'end_time_thu'   => '22:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 12,
        ]);
        $c5->styles()->attach($s);
    }
}


// 1 Havana (Buenavista zg)
// 2 Santiago de Cuba (Buenavista zg)
// 3 Guantanamo (Buenavista zg)
// 4 Matanzas (Buenavista)
// 5 Santa Clara (Buenavista)

// 6 Velika Soba (Bandoleros)
// 7 Mala soba (Bandoleros)
// 8 Salsa fusion
// 9 Velika soba (PC Salsa)
// 10 Mala Soba (PC Salsa)

// 11 Soss
// 12 Mint Fitness
// 13 1st floor (Guliver Fitness)
// 14 Vitalnost
// 15 Žižula
// 16 Pomak
// 17 Dance center
// 18 Tango zagreb
// 19 Casablanka
