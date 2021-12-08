<?php

namespace Database\Seeders\Courses;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PCSalsa extends Seeder
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
            'tagline'        => '',
            'slug'           => 'pc-salsa-salsa',            
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'monday'         => true,
            'start_time_mon' => '20:00',
            'end_time_mon'   => '21:00',   
            'wednesday'      => true,
            'start_time_wed' => '20:00',
            'end_time_wed'   => '21:00',                                                                                          
            'level'          => 'intermediate',
            'level_code'     => 'b1',
            'full_price'     => 250, 'reduced_price' => null,            
            'focus'          => 'partnerwork', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 7,
            'space_id'   => 9,
        ]);
        $s1->styles()->attach(3);

        $s1 = Course::create([            
            'name'           => 'Bachata',            
            'slug'           => 'pc-salsa-bachata',            
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '21:00',
            'end_time_wed'   => '22:00',                                                                                          
            'level'          => 'intermediate',
            'level_code'     => 'b1',
            'full_price'     => 150, 'reduced_price' => null,            
            'focus'          => 'partnerwork', 'type' => 'Class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 7,
            'space_id'   => 9,
        ]);
        $s1->styles()->attach(36);
    }
}
