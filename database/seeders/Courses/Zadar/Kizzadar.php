<?php

namespace Database\Seeders\Courses\Zadar;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Kizzadar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','Kizzadar')->first();
        $city = City::where('name','Zadar')->first();
        $style = Style::select(['id','name'])->get();
        $k = $style->where('name','Kizomba')->pluck('id');
        
        $c1 = Course::create([            
            'name'           => 'Kizomba',
            'slug'           => 'kizomba-1635679866',            
            'level'          => 'beginner',
            'level_code'     => 'a2',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '20:30:00',
            'end_time_mon'   => '22:00:00',
            'wednesday'      => true,
            'start_time_wed' => '20:30:00',
            'end_time_wed'   => '22:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 14,
        ]);
        $c1->styles()->attach($k);
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
