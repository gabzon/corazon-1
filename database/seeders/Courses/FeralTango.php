<?php

namespace Database\Seeders\Courses;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FeralTango extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $t1 = Course::create([            
            'name'           => 'Tehnika',
            'tagline'        => 'kretanja za plesače',
            'slug'           => 'feraltango-tehnika',        
            'description'    => 'Razumijevanje osnova kretanja i redovno vježbanje plesne tehnike nam pomaže da se u plesu osjećamo slobodnije i sigurnije, te da umanjimo mogućnost ozljede. A i nije ni tako loše za estetiku pokreta 😅.
            Otvoreno za sve plesače i plesačice, upisi na mjesečnoj bazi. Limitirano na 12 polaznika uz predbilježbu.
            Cijena: 300kn po osobi mjesečno', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '18:30',
            'end_time_tue'   => '19:45',                                                                                          
            'level'          => 'open level',
            'level_code'     => 'op',
            'full_price'     => 300, 'reduced_price' => 250,            
            'focus'          => 'solo', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t1->styles()->attach(19);

        $t1 = Course::create([            
            'name'           => 'Tango',
            'tagline'        => 'Laboratory II',
            'slug'           => 'feraltango-lab-II',  
            'description'   => 'Tango Laboratory za PAROVE
            Ova mala grupa namjenjena je parovima koji zele raditi intenzivno i progresivno na usvajanju tehnika za poboljsavanje kretanja, komfora, muzikalnosti i izrazaja u tango zagrljaju. Informacije su organizirane na bazi semestra, pa preporucujemo predan rad para kroz skolsku godinu. Svaka radna jedinica sastoji se od 4 grupna sastanka, i jedan privatan sat za par sa videoanalizom.
            Cijena: 500kn/osobi',          
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '19:45',
            'end_time_tue'   => '21:45',                                                                                          
            'level'          => 'intermediate',
            'level_code'     => 'b1',
            'full_price'     => 500, 'reduced_price' => 450,            
            'focus'          => 'solo', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t1->styles()->attach(19);

        $t1 = Course::create([            
            'name'           => 'Tango',
            'tagline'        => 'Laboratory I',
            'slug'           => 'feraltango-lab-I',   
            'description'   => 'Tango Laboratory za PAROVE
            Ova mala grupa namjenjena je parovima koji zele raditi intenzivno i progresivno na usvajanju tehnika za poboljsavanje kretanja, komfora, muzikalnosti i izrazaja u tango zagrljaju. Informacije su organizirane na bazi semestra, pa preporucujemo predan rad para kroz skolsku godinu. Svaka radna jedinica sastoji se od 4 grupna sastanka, i jedan privatan sat za par sa videoanalizom.
            Cijena: 500kn/osobi',         
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '18:00',
            'end_time_wed'   => '20:00',                                                                                          
            'level'          => 'beginner',
            'level_code'     => 'a1',
            'full_price'     => 500, 'reduced_price' => 450,            
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t1->styles()->attach(19);

        $t4 = Course::create([            
            'name'           => 'Mancave praktika',
            'tagline'        => '',
            'description'   => 'Inspirirana muskim praktikama iz zlatnog doba tanga, Ivan vodi ovu praktiku za leadere zeljne eksperimentacije, razmjene informacija, i vjezbe na individualnim elementima specificnima za leadere.
            Cijena: 300kn/osobi 4 sastanka',
            'slug'           => 'feraltango-mancave',            
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'wednesday'      => true,
            'start_time_wed' => '20:00',
            'end_time_wed'   => '21:15',                                                                                          
            'level'          => 'open level',
            'level_code'     => 'op',
            'full_price'     => 500, 'reduced_price' => 450,            
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t4->styles()->attach(19);
    }
}
