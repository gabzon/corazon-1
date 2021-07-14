<?php

namespace Database\Seeders;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $c1 = Course::create([
            'name'           => 'Lady Styling',
            'slug'           => 'lady-styling-aaasdfkldvslkjeflk33232',                                                
            'start_date'     => $now, 'end_date' => $now->add(1, 'month'),
            'tuesday'        => 1,
            'start_time_tue' => '19:00:00',
            'end_time_tue'   => '20:30:00',                                                      
            'level'          => 'beginner',            
            'full_price'     => 220, 'reduced_price' => 200,            
            'focus'          => 'footwork', 'type' => 'class', 'status' => 'Active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 1,
            'classroom_id'   => 3
        ]);
        $c1->styles()->attach([1]);

        $c2 = Course::create([
            'name'              => 'Salsa on2',
            'slug'              => 'salsa-on2-aaasdfkldvslkjeflk33232',                                                
            'start_date'        => $now,
            'end_date'          => $now->add(1, 'month'),
            'thursday'           => 1,
            'start_time_thu'    => '19:00:00',
            'end_time_thu'      => '20:30:00',                                                       
            'level'             => 'beginner',            
            'full_price'        => 220, 'reduced_price' => 200,            
            'focus'             => 'parnerwork', 'type' => 'class', 'status' => 'Active',
            'user_id'           => 1, 'city_id' => 1, 'organization_id'   => 1,
            'classroom_id'      => 1,
        ]);

        $c2 = Course::create([
            'name'              => 'Salsa on2',
            'slug'              => 'salsa-on2-ssssd',                                                
            'start_date'        => $now,
            'end_date'          => $now->add(1, 'month'),
            'thursday'           => 1,
            'start_time_thu'    => '20:30:00',
            'end_time_thu'      => '22:00:00',                                                       
            'level'             => 'intermediate',            
            'full_price'        => 220, 'reduced_price' => 200,            
            'focus'             => 'partnerwork', 'type' => 'class', 'status' => 'Active',
            'user_id'           => 1, 'city_id' => 1, 'organization_id'   => 1,
            'classroom_id'      => 1,
        ]);

        $c1 = Course::create([
            'name'              => 'Salsa fusion',
            'slug'              => 'salsa-fusion-aaasdfkldvslkjeflk33232',                                                
            'start_date'        => $now,
            'end_date'          => $now->add(1, 'month'),
            'monday'            => 1,
            'start_time_mon'    => '18:00:00',
            'end_time_mon'      => '19:00:00',                                
            'wednesday'         => 1,
            'start_time_wed'    => '18:00:00',
            'end_time_wed'      => '19:00:00',                        
            'level'             => 'open',            
            'full_price'        => 220, 'reduced_price' => 200,            
            'focus'             => 'footwork', 'type' => 'class', 'status' => 'Active',
            'user_id'           => 1, 'city_id'           => 1, 'organization_id'   => 1,
            'classroom_id'      => 6,
        ]);

        Course::factory(40)->create();      
    }
}
