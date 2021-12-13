<?php

namespace Database\Seeders\Courses\Zadar;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Tonciivana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','Plesni Studio Tonći i Ivana')->first();
        $city = City::where('name','Zadar')->first();
        $style = Style::select(['id','name'])->get();
        $s = $style->where('name','Salsa on1')->pluck('id');
        $b = $style->where('name','Bachata')->pluck('id');

        $c1 = Course::create([            
            'name'           => 'Lady Styling',
            'tagline'        => '',
            'slug'           => 'lady-styling-1635681957',        
            'level'          => 'open level',
            'level_code'     => 'op',
            'focus'          => 'selfwork',
            'type'           => 'class',
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'friday'         => true,
            'start_time_fri' => '20:00:00',
            'end_time_fri'   => '21:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 14,
        ]);
        $c1->styles()->attach($s);

        $c2 = Course::create([            
            'name'           => 'Bachata',
            'tagline'        => '',
            'slug'           => 'bachata-1635681828',
            'level'          => 'intermediate',
            'level_code'     => 'b1',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '21:00:00',
            'end_time_tue'   => '22:30:00',  
            'thursday'       => true,
            'start_time_thu' => '21:00:00',
            'end_time_thu'   => '22:30:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 14,
        ]);
        $c2->styles()->attach($b);

        $c2 = Course::create([            
            'name'           => 'Bachata',
            'tagline'        => '',
            'slug'           => 'bachata-1635681641',
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '20:00:00',
            'end_time_tue'   => '21:00:00',  
            'thursday'       => true,
            'start_time_thu' => '20:00:00',
            'end_time_thu'   => '21:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 14,
        ]);
        $c2->styles()->attach($b);
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