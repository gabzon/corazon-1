<?php

namespace Database\Seeders\Courses;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SalsaFusion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        
        $salsa1 = Course::create([            
            'name'           => 'Salsa',
            'slug'           => 'salsa-fusion-salsa',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '17:50',
            'end_time_mon'   => '18:50',
            'wednesday'      => true,
            'start_time_wed' => '17:50',
            'end_time_wed'   => '18:50',                                                      
            'level'          => 'beginner',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $salsa1->styles()->attach(4);

        $s2 = Course::create([            
            'name'           => 'Salsa',
            'slug'           => 'salsa-fusion-salsa-2',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '19:00',
            'end_time_mon'   => '20:15',   
            'wednesday'      => true,
            'start_time_wed' => '19:00',
            'end_time_wed'   => '20:15',                                                      
            'level'          => 'intermediate',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $s2->styles()->attach(4);

        $sfl = Course::create([            
            'name'           => 'Salsa Fusion Lab',
            'slug'           => 'salsa-fusion-salsa-lab',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '20:30',
            'end_time_mon'   => '22:00',                                                      
            'wednesday'      => true,
            'start_time_wed' => '20:30',
            'end_time_wed'   => '22:00',                                                      
            'level'          => 'upper-intermediate',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'footwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $sfl->styles()->attach(11);

        $lady = Course::create([            
            'name'           => 'Lady styling',
            'slug'           => 'salsa-fusion-lady-styling',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '18:00',
            'end_time_tue'   => '19:15',                                                      
            'level'          => 'elementary',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'styling', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $lady->styles()->attach(11);

        $sf = Course::create([            
            'name'           => 'Salsa Fusion',
            'slug'           => 'salsa-fusion-salsa-fusion',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '19:30',
            'end_time_tue'   => '20:45',                                                      
            'level'          => 'elementary',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'styling', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $sf->styles()->attach(11);

        $hh = Course::create([            
            'name'           => 'Hip Hop',
            'slug'           => 'salsa-fusion-hip-hop',
            'tagline'        => 'C.Flow',
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '21:10',
            'end_time_tue'   => '22:40',                                                      
            'friday'         => true,
            'start_time_fri' => '20:40',
            'end_time_fri'   => '22:40',                                                      
            'level'          => 'intermediate',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'solo', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $hh->styles()->attach(14);

        $salsa3 = Course::create([            
            'name'           => 'Salsa',
            'slug'           => 'salsa-fusion-salsa-3',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'         => true,
            'start_time_thu' => '18:00',
            'end_time_thu'   => '19:15',                                                      
            'level'          => 'elementary',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'partnerwork', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $sf->styles()->attach(4);

        $cp = Course::create([            
            'name'           => 'Ladies\' Choreo Project',
            'slug'           => 'salsa-fusion-choreo-project',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'         => true,
            'start_time_thu' => '19:30',
            'end_time_thu'   => '21:00',                                                      
            'level'          => 'elementary',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'partnerwork', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);

        $su = Course::create([            
            'name'           => 'Suvremeni',
            'slug'           => 'salsa-fusion-suvremeni',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'         => true,
            'start_time_thu' => '21:10',
            'end_time_thu'   => '22:40',                                                      
            'level'          => 'open level',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'solo', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);

        $sf2 = Course::create([            
            'name'           => 'Salsa Fusion',
            'slug'           => 'salsa-fusion-basic',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'friday'         => true,
            'start_time_fri' => '17:50',
            'end_time_fri'   => '19:05',                                                      
            'level'          => 'beginner',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'solo', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $sf2->styles()->attach(11);

        $ho = Course::create([            
            'name'           => 'House',
            'slug'           => 'salsa-fusion-house',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'friday'         => true,
            'start_time_fri' => '19:15',
            'end_time_fri'   => '20:30',                                                      
            'level'          => 'open level',            
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'solo', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 3,
            'classroom_id'   => 8,
        ]);
        $ho->styles()->attach(15);

    }
}

