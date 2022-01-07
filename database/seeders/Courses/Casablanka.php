<?php

namespace Database\Seeders\Courses;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Casablanka extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','Sportsko rekreacijski i plesni klub CasaBlanka')->first();
        $city = City::where('name','Karlovac')->first();
        $style = Style::select(['id','name'])->get();
        $b = $style->where('name','Bachata')->pluck('id');
        $s = $style->where('name','Salsa')->pluck('id');

        $t1 = Course::create([            
            'name'           => 'Bachata početna',
            'tagline'        => '',
            'slug'           => 'bachata-pocetna-1638474907',        
            'level'          => 'beginner',
            'level_code'     => 'a1',            
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'friday'         => true,
            'start_time_fri' => '21:00:00',
            'end_time_fri'   => '22:00:00',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 19,
        ]);                        
        $t1->styles()->attach($b);


        $t2 = Course::create([            
            'name'           => 'Bachata napredna',
            'slug'           => 'bachata-napredna-1638438605',        
            'tagline'        => '',
            'level'          => 'advanced',
            'level_code'     => 'c1',
            'focus'          => 'partnerwork',
            'type'           => 'class',
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '21:00:00',
            'end_time_wed'   => '22:00:00',
            'thursday'       => true,
            'start_time_thu' => '21:00:00',
            'end_time_thu'   => '22:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 19,
        ]);
        $t2->styles()->attach($b);

        $t3 = Course::create([            
            'name'           => 'Salsa poćetni tećaj',
            'tagline'        => '',
            'slug'           => 'salsa-pocetni-tecaj-1638438339',        
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '21:00:00',
            'end_time_tue'   => '22:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 19,
        ]);
        $t3->styles()->attach($s);
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
