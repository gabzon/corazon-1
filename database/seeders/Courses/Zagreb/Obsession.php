<?php

namespace Database\Seeders\Courses\Zagreb;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Obsession extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','La obsesion by Gloria')->first();
        $city = City::where('name','Zagreb')->first();
        $style = Style::select(['id','name'])->get();
        $sb = $style->where('name','Sensual Bachata')->pluck('id');

        $c1 = Course::create([            
            'name'           => 'Bachata improver',            
            'slug'           => Str::slug('Bachata improver','-'),        
            'level'          => 'beginner',
            'level_code'     => 'a2',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'wednesday'        => true,
            'start_time_wed' => '20:00:00',
            'end_time_wed'   => '21:30:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 20,
        ]);
        $c1->styles()->attach($sb);

        $c1 = Course::create([            
            'name'           => 'Bachata Obsession',
            'slug'           => Str::slug('Bachata Obsession','-'),
            'level'          => 'intermediate',
            'level_code'     => 'b2',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '21:30:00',
            'end_time_wed'   => '23:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 20,
        ]);
        $c1->styles()->attach($sb);

        $c1 = Course::create([            
            'name'           => 'Bachata Početna',
            'slug'           => Str::slug('Bachata Početna','-'),
            'level'          => 'beginer',
            'level_code'     => 'b1',            
            'focus'          => 'partnerwork',
            'type'           => 'Class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '20:00:00',
            'end_time_thu'   => '21:30:00',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 20,
        ]);
        $c1->styles()->attach($sb);

        $c1 = Course::create([            
            'name'           => 'Lady Styling by Gloria', 
            'slug'           => Str::slug('Lady Styling by Gloria','-'),        
            'level'          => 'open level',
            'level_code'     => 'op',
            'focus'          => 'selfwork',
            'type'           => 'class',
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '',
            'end_time_thu'   => '',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 20,
        ]);
        $c1->styles()->attach($sb);

        $c1 = Course::create([            
            'name'           => 'Man Styling by Kiki',
            'slug'           => Str::slug('Man Styling by Kiki','-'),
            'level'          => 'open level',
            'level_code'     => 'op',
            'focus'          => 'partnerwork',
            'type'           => 'Class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '20:00:00',
            'end_time_thu'   => '21:00:00',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 20,
        ]);
        $c1->styles()->attach($sb);

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
// 20 xx2