<?php

namespace Database\Seeders\Courses;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Video;
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
            'start_date'     => '2021-09-15', 'end_date' => '2021-12-17 00:00',
            'tuesday'        => true,
            'start_time_tue' => '18:30',
            'end_time_tue'   => '19:45',                                                                                          
            'level'          => 'open level',
            'level_code'     => 'op',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'finished',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'       => 10,
        ]);
        $t1->styles()->attach(19);

        $t2 = Course::create([            
            'name'           => 'Tehnika',
            'tagline'        => 'kretanja za plesače',
            'slug'           => 'feraltango-tehnika-2',        
            'description'    => 'Razumijevanje osnova kretanja i redovno vježbanje plesne tehnike nam pomaže da se u plesu osjećamo slobodnije i sigurnije, te da umanjimo mogućnost ozljede. A i nije ni tako loše za estetiku pokreta 😅.
            Otvoreno za sve plesače i plesačice, upisi na mjesečnoj bazi. Limitirano na 12 polaznika uz predbilježbu.
            Cijena: 300kn po osobi mjesečno', 
            'start_date'     => Carbon::now(), 'end_date' => Carbon::now()->add(10, 'month'),
            'tuesday'        => true,
            'start_time_tue' => '18:30',
            'end_time_tue'   => '19:45',                                                                                          
            'level'          => 'open level',
            'level_code'     => 'op',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t2->styles()->attach(19);
        
        $lessonTehnik = Lesson::create([            
            'title'         => 'Focus on the Axis',
            'date'          => '2022-01-11',
            'description'   => 'During this class we worked on the axis',            
            'user_id'       => 1,
            'course_id'     => $t2->id,
            'organization_id'=> 11,            
        ]);

        $video = Video::create([
            'title'             => 'Lesson of Tuesday January 11th, 2022 Tehnik',
            'embed'             => '<iframe width="560" height="315" src="https://www.youtube.com/embed/E1JCEPIAh8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'url'               => 'https://youtu.be/E1JCEPIAh8g',
            'organization_id'   => 11,
            'user_id'           => 1,
        ]);

        $lessonTehnik->videos()->attach($video->id, ['user_id' => 1]);

        $t3 = Course::create([            
            'name'           => 'Tango',
            'tagline'        => 'Laboratory II',
            'slug'           => 'feraltango-lab-II',  
            'description'   => 'Tango Laboratory za PAROVE
            Ova mala grupa namjenjena je parovima koji zele raditi intenzivno i progresivno na usvajanju tehnika za poboljsavanje kretanja, komfora, muzikalnosti i izrazaja u tango zagrljaju. Informacije su organizirane na bazi semestra, pa preporucujemo predan rad para kroz skolsku godinu. Svaka radna jedinica sastoji se od 4 grupna sastanka, i jedan privatan sat za par sa videoanalizom.
            Cijena: 500kn/osobi',          
            'start_date'     => '2021-09-15', 'end_date' => '2021-12-17',
            'tuesday'        => true,
            'start_time_tue' => '19:45',
            'end_time_tue'   => '21:45',                                                                                          
            'level'          => 'intermediate',
            'level_code'     => 'b1',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'finished',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t3->styles()->attach(19);

        $t4 = Course::create([            
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
            'level_code'     => 'b2',            
            'focus'          => 'selfwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t4->styles()->attach(19);

        $lessonLab2 = Lesson::create([            
            'title'         => 'Everything we have done so far will change today',
            'date'          => '2022-01-11',
            'description'   => 'We discussed about articulation and introduction to energy on curves',  
            'user_id'       => 1,
            'course_id'     => $t4->id,
            'organization_id'=> 11,            
        ]);

        $video2 = Video::create([
            'title'             => 'Lesson of Tuesday January 11th, 2022',
            'embed'             => '<iframe width="560" height="315" src="https://www.youtube.com/embed/2BBlO2YqUYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'url'               => '',
            'organization_id'   => 11,
            'user_id'           => 1,
        ]);

        $lessonLab2->videos()->attach($video2->id, ['user_id' => 1]);

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
            'focus'          => 'partnerwork', 'type' => 'class', 'status' => 'active',
            'user_id'        => 1, 'city_id' => 1, 'organization_id'   => 11,
            'space_id'   => 10,
        ]);
        $t4->styles()->attach(19);
    }
}
