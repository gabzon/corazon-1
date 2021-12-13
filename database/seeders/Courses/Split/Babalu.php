<?php

namespace Database\Seeders\Courses\Split;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Babalu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','')->first();
        $city = City::where('name','Split')->first();
        $style = Style::select(['id','name'])->get();
        $b = $style->where('name','bachata')->pluck('id');
        $s = $style->where('name','Salsa on2')->pluck('id');

        $t1 = Course::create([            
            'name'           => '',
            'tagline'        => '',
            'slug'           => '',        
            'level'          => '',
            'level_code'     => '',
            'focus'          => '',
            'type'           => '', 
            'status'         => '',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '',
            'end_time_tue'   => '',
            'thursday'       => true,
            'start_time_thu' => '',
            'end_time_thu'   => '',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 17,
        ]);
        $t1->styles()->attach([$b,$s]);
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
