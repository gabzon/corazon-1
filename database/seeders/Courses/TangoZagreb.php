<?php

namespace Database\Seeders\Courses;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TangoZagreb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','Tango Zagreb')->first();
        $city = City::where('name','Zagreb')->first();
        $style = Style::select(['id','name'])->get();

        $t1 = Course::create([            
            'name'           => 'Tango',
            'tagline'        => '',
            'slug'           => 'tango-1636475921',        
            'level'          => 'beginner',
            'level_code'     => 'a1',            
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '20:30:00',
            'end_time_thu'   => '22:00:00',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 18,
        ]);
        $t1->styles()->attach($style->where('name','Tango')->pluck('id'));

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
