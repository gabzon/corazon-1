<?php

namespace Database\Seeders\Courses;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Soss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        

        $hh = Course::create([            
            'name'           => 'Hip-Hop',
            'slug'           => 'soss-hip-hop',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '18:55',
            'end_time_mon'   => '19:55',
            'wednesday'      => true,
            'start_time_wed' => '18:55',
            'end_time_wed'   => '19:55',                                                      
            'level'          => 'beginner', 
            'level_code'     => 'a1',                       
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $hh->styles()->attach(14);  
        
        $hh2 = Course::create([            
            'name'           => 'Hip-Hop',
            'slug'           => 'soss-hip-hop',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '20:00',
            'end_time_mon'   => '21:00',
            'wednesday'      => true,
            'start_time_wed' => '20:00',
            'end_time_wed'   => '21:00',                                                      
            'level'          => 'intermediate',  
            'level_code'     => 'b1',                      
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $hh2->styles()->attach(14);  

        $funk = Course::create([            
            'name'           => 'Funk Styles',
            'slug'           => 'soss-funk-styles',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '21:00',
            'end_time_mon'   => '22:00',
            'level'          => 'open level',
            'level_code'     => 'op',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $funk->styles()->attach(40);

        $mix = Course::create([            
            'name'           => 'Početna mix',
            'slug'           => 'soss-mix',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '17:50',
            'end_time_tue'   => '18:50',
            'friday'         => true,
            'start_time_fri' => '17:50',
            'end_time_fri'   => '18:50',
            'level'          => 'beginner',
            'level_code'     => 'a1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $mix->styles()->attach([13,14,15]);

        $koreo = Course::create([            
            'name'           => 'Koreografija',
            'slug'           => 'soss-koreografija',                                                
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '18:55',
            'end_time_tue'   => '19:50',
            'level'          => 'open level',
            'level_code'     => 'op',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);

        $afro = Course::create([            
            'name'           => 'Afro',
            'slug'           => 'soss-afro', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '20:00',
            'end_time_tue'   => '21:00',
            'level'          => 'intermediate',
            'level_code'     => 'b1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $afro->styles()->attach([13]);

        $h = Course::create([            
            'name'           => 'House',
            'slug'           => 'soss-house-beginner', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '21:00',
            'end_time_tue'   => '22:00',
            'level'          => 'beginner',
            'level_code'     => 'a1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $h->styles()->attach([13]);

        $h2 = Course::create([            
            'name'           => 'House',
            'slug'           => 'soss-house-intermediate', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '17:50',
            'end_time_wed'   => '18:50',
            'level'          => 'intermediate',
            'level_code'     => 'b1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $h2->styles()->attach([15]);

        $afro2 = Course::create([            
            'name'           => 'Afro',
            'slug'           => 'soss-afro-beginner', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '16:45',
            'end_time_wed'   => '17:45',
            'level'          => 'beginner',
            'level_code'     => 'a1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $afro2->styles()->attach([13]);

        $w1 = Course::create([            
            'name'           => 'Waacking',
            'slug'           => 'soss-waacking-beginner', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '17:50',
            'end_time_thu'   => '18:50',
            'level'          => 'beginner',
            'level_code'     => 'a1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $w1->styles()->attach([41]);

        $w2 = Course::create([            
            'name'           => 'Waacking',
            'slug'           => 'soss-waacking-intermediate', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '18:55',
            'end_time_thu'   => '19:55',
            'level'          => 'intermediate',
            'level_code'     => 'b1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $w2->styles()->attach([41]);
        
        $lo1 = Course::create([            
            'name'           => 'Locking',
            'slug'           => 'soss-locking-intermediate', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '20:00',
            'end_time_thu'   => '21:00',
            'level'          => 'intermediate',
            'level_code'     => 'b1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $lo1->styles()->attach([42]);

        $hh3 = Course::create([            
            'name'           => 'Hip Hop',
            'slug'           => 'soss-hip-hop-advanced', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'thursday'       => true,
            'start_time_thu' => '21:00',
            'end_time_thu'   => '22:00',
            'saturday'       => true,
            'start_time_sat' => '10:00',
            'end_time_sat'   => '11:00',
            'level'          => 'advanced',
            'level_code'     => 'c1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $hh3->styles()->attach([14]);

        $lo2 = Course::create([            
            'name'           => 'Locking',
            'slug'           => 'soss-locking-beginner', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'friday'         => true,
            'start_time_fri' => '20:00',
            'end_time_fri'   => '21:00',
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $lo2->styles()->attach([42]);

        $fe = Course::create([            
            'name'           => 'Female',
            'slug'           => 'soss-female', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'friday'         => true,
            'start_time_fri' => '20:00',
            'end_time_fri'   => '21:00',
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 13,
            'space_id'   => 9,
        ]);
        $fe->styles()->attach([42]);   
    }
}
