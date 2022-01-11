<?php

namespace Database\Seeders\Courses;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Bandoleros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $s1 = Course::create([            
            'name'           => 'Salsa',
            'slug'           => 'bandoleros-salsa-beginner',            
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '19:00',
            'end_time_tue'   => '20:00',                                                      
            'thursday'       => true,
            'start_time_thu' => '19:00',
            'end_time_thu'   => '20:00',                                                      
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 2,
            'space_id'   => 6,
        ]);
        $s1->styles()->attach(3);

        $s2 = Course::create([            
            'name'           => 'Salsa',
            'slug'           => 'bandoleros-salsa-advanced',
            'tagline'        => '',
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '20:15',
            'end_time_tue'   => '21:15',                                                      
            'thursday'       => true,
            'start_time_thu' => '20:15',
            'end_time_thu'   => '21:15', 
            'level'          => 'advanced',
            'level_code'     => 'c1',
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 2,
            'space_id'   => 6,
        ]);
        $s2->styles()->attach(3);

        $kiz = Course::create([            
            'name'           => 'Kizomba',
            'slug'           => 'bandoleros-kizomba',
            'tagline'        => '',
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '19:00',
            'end_time_tue'   => '20:00',                                                      
            'thursday'       => true,
            'start_time_thu' => '19:00',
            'end_time_thu'   => '20:00', 
            'level'          => 'open-level',
            'level_code'     => 'op',
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 2,
            'space_id'       => 6,
        ]);
        $kiz->styles()->attach(38);

        $r = Course::create([            
            'name'           => 'Reggaeton',
            'slug'           => 'bandoleros-reggaeton',
            'tagline'        => '',
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'         => true,
            'start_time_tue' => '19:00',
            'end_time_tue'   => '20:00',                                                      
            'thursday'       => true,
            'start_time_thu' => '19:00',
            'end_time_thu'   => '20:00', 
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'full_price'     => 250, 'reduced_price' => 200,            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 2,
            'space_id'      => 7,
        ]);
        $r->styles()->attach(37);
    }
}



// 1 'Salsa',
// 2 'Cuban salsa',
// 3 'Salsa on1', 
// 4 'Salsa on2', 
// 5 'Rueda de Casino', 
// 6 'Afro-cuban', 
// 7 'Son Cubano', 
// 8 'Rumba',
// 9 'Boogaloo', 
// 10 'Pachanga', 
// 11 'Salsa fusion', 
// 12 'Dancehall', 
// 13 'Afro-beats', 

// 14 'Hip-hop',       
// 15 'House',
// 16 'Streching', 
// 17 'Ballet', 
// 18 'Contemporary dance', 
// 19 'Tango', 
// 20 'English Waltz', 
// 21 'Viennese Waltz', 
// 22 'Foxtrot', 
// 23 'Quickstep', 
// 24 'Pasodoble', 
// 25 'pasodoble', 
// 26 'Cuban bolero', 
// 27 'Samba', 
// 28 'Ballroom rumba', 
// 29 'Cha cha cha', 
// 30 'Jive', 
// 31 'Lindy Hop', 
// 32 'Balboa', 
// 33 'Charleston', 
// 34 'Rock and roll', 
// 35 'Cumbia', 
// 36 'Merengue', 
// 37 'Bachata', 
// 38 'Reggaeton', 
// 39 'Kizomba', 
// 40 'Urban kiz', 
