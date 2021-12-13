<?php

namespace Database\Seeders\Courses\Split;

use App\Models\City;
use App\Models\Course;
use App\Models\Organization;
use App\Models\Style;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BailaConmigo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school = Organization::where('name','Baila conmigo by Jerko & Maja')->first();
        $city = City::where('name','Split')->first();
        $style = Style::select(['id','name'])->get();
        $b = $style->where('name','Bachata')->pluck('id');
        $s = $style->where('name','Salsa on2')->pluck('id');        

        $c1 = Course::create([            
            'name'           => 'Bachata Progressive',
            'tagline'        => '',
            'slug'           => 'bachata-progressive-1636026883',        
            'level'          => 'intermediate',
            'level_code'     => 'b3',            
            'focus'          => 'partnerwork',
            'type'           => 'Class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '',
            'end_time_tue'   => '',                        
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 16,
        ]);
        $c1->styles()->attach($b);

        $c2 = Course::create([            
            'name'           => 'Bachata Medium',
            'tagline'        => '',
            'slug'           => 'bachata-medium-1636026768',
            'level'          => 'intermediate',
            'level_code'     => 'b1',
            'focus'          => 'partnerwork',
            'type'           => 'Class',
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
            'space_id'       => 16,
        ]);
        $c2->styles()->attach($b);

        $c3 = Course::create([            
            'name'           => 'Salsa Shines',
            'tagline'        => '',
            'slug'           => 'salsa-shines-all-levels-1636026685',        
            'level'          => 'open level',
            'level_code'     => 'op',
            'focus'          => 'selfwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '21:00:00',
            'end_time_thu'   => '22:30:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 16,
        ]);
        $c3->styles()->attach($s);

        $c4 = Course::create([            
            'name'           => 'Salsa On2 Advanced',
            'tagline'        => '',
            'slug'           => 'salsa-on2-advanced-1636026540',        
            'level'          => 'advanced',
            'level_code'     => 'c1',
            'focus'          => 'partnerwork',
            'type'           => 'class',
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '21:30:00',
            'end_time_mon'   => '22:30:00',
            'wednesday'      => true,
            'start_time_wed' => '21:30:00',
            'end_time_wed'   => '22:30:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 16,
        ]);
        $c4->styles()->attach($s);

        $c5 = Course::create([
            'name'           => 'Salsa On2 Medium',
            'tagline'        => 'salsa-on2-medium-1636026423',
            'slug'           => '',        
            'level'          => 'intermediate',
            'level_code'     => 'b2',
            'focus'          => 'partnerwork',
            'type'           => 'class', 
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '20:30:00',
            'end_time_wed'   => '21:30:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 16,
        ]);
        $c5->styles()->attach($s);


        $c6 = Course::create([
            'name'           => 'Salsa & Bachata',
            'tagline'        => '',
            'slug'           => 'salsa-bachata-1636026150',        
            'level'          => 'beginner',
            'level_code'     => 'b1',
            'focus'          => 'partnerwork',
            'type'           => 'class',
            'status'         => 'active',
            'start_date'     => Carbon::now(), 
            'end_date'       => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '19:00:00',
            'end_time_tue'   => '20:00:00',
            'thursday'       => true,
            'start_time_thu' => '19:00:00',
            'end_time_thu'   => '20:00:00',
            'user_id'        => 1, 
            'city_id'        => $city->id, 
            'organization_id'=> $school->id,
            'space_id'       => 16,
        ]);
        $c6->styles()->attach([$b[0],$s[0]]);



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
